<?php

namespace LIFO\ClassifBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Helper\ProgressBar;

use LIFO\ClassifBundle\Entity\Tesson;
use LIFO\ClassifBundle\Entity\US;
use LIFO\ClassifBundle\Entity\NumIsolation;
use LIFO\ClassifBundle\Entity\Site;
use LIFO\ClassifBundle\Entity\Zone;
use LIFO\ClassifBundle\Entity\Molette;
use LIFO\ClassifBundle\Entity\TessonMolette;
use LIFO\ClassifBundle\Entity\Decor;
use LIFO\ClassifBundle\Entity\TypeDecor;
use LIFO\ClassifBundle\Entity\Utilisateur;

class ImportCommand extends ContainerAwareCommand
{

    protected function configure()
    {
        // Name and description for app/console command
        $this
        ->setName('import:csv')
        ->setDescription('Fill database from CSV file');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        // Showing when the script is launched
        $now = new \DateTime();
        $output->writeln('<comment>Start : ' . $now->format('d-m-Y G:i:s') . ' ---</comment>');
        
        // Importing CSV on DB via Doctrine ORM
        $this->import($input, $output);
        
        // Showing when the script is over
        $now = new \DateTime();
        $output->writeln('<comment>End : ' . $now->format('d-m-Y G:i:s') . ' ---</comment>');
    }
    
    protected function import(InputInterface $input, OutputInterface $output)
    {
        // Getting php array of data from CSV
        $data = $this->get($input, $output);
        
        // Getting doctrine manager
        $em = $this->getContainer()->get('doctrine')->getManager();
        // Turning off doctrine default logs queries for saving memory
        $em->getConnection()->getConfiguration()->setSQLLogger(null);
        
        // Define the size of record, the frequency for persisting the data and the current index of records
        $size = count($data);
        $batchSize = 20;
        $i = 1;
        
        // Starting progress
        $progress = new ProgressBar($output, $size);
        $progress->start();
        
        // Processing on each row of data
        foreach($data as $row) {
            
        	$tesson = $em -> getRepository('LIFOClassifBundle:Tesson')
        				  -> findOneByNumEnregistrement($row['N° enregistrement']);
        	if(!is_object($tesson)){
            	$tesson = new Tesson();
        	}
        	
        	$annee=$row['année'];
            if($annee!=""){
            	if(strlen($annee)>4){
            		$annee = substr($annee, 0, 4);
            	}
            	$tesson->setAnneeDecouverte($annee);
            }
            if($row['commentaire']!=""){
            	$tesson->setCommentaire($row['commentaire']);
            }
            if($row['dévellopé']!=""){
            	if(strpos($row['dévellopé'], "restitué")){
  		          	$tesson->setDeveloppe("Restitué");
            	} else {
            		if(strpos($row['dévellopé'],"complet")){
            			$tesson->setDeveloppe("Complet");
            		} else {
            			$tesson->setDeveloppe("Incomplet");
            		}
            	}
            }
            $tesson->setNumEnregistrement($row['N° enregistrement']);
            if($row['INDIVIDU']=="INDIVIDU"){
            	$tesson->setLotIndividu("INDIVIDU");
            } else {
            	$tesson->setLotIndividu("LOT");
            }
            if($row['Tombe']!=""){
            	$tesson->setNumTombe($row['Tombe']);
            } else {
            	$tesson->setNumTombe(NULL);
            }
            if($row['Fait']!=""){
            	$tesson->setFait($row['Fait']);
            } else {
            	$tesson->setFait(NULL);
            }
           if($row['largeur']!=""){
           	$str=str_replace("?","0",$row['largeur']);
            	$tesson->setLargeur(str_replace(",",".",$str));
            } else {
            	$tesson->setLargeur(0);
            }
            if($row['longueur']!=""){
            	$str=str_replace("?","0",$row['longueur']);
            	$tesson->setLongueur(str_replace(",",".",$str));
            } else {
            	$tesson->setLongueur(0);
            }
            if($row['nbre motifs h']!=""){
	           	$str=str_replace("?","0",$row['nbre motifs h']);
            	$tesson->setNombreMotifsHorizontaux($str);
            } else {
            	$tesson->setNombreMotifsHorizontaux(0);
            }
            if($row['nbre motifs v']!=""){
	            $str=str_replace("?","0",$row['nbre motifs v']);
            	$tesson->setNombreMotifsVerticaux($str);
            } else {
            	$tesson->setNombreMotifsVerticaux(0);
            }


            $str=str_replace(" ","",$row['site']);
            $codeINSEE=substr($str,0, 5);
            $numSite=substr($str, 5, strlen($str));
            $site = $em ->getRepository('LIFOClassifBundle:Site')
             			 ->findOneBy(
             			 		array('codeINSEE' => $codeINSEE,
             			 		'numSiteCommune' => $numSite));
              
             if(!is_object($site)){
	            $site = new Site();
           		$site->setCodeINSEE($codeINSEE);
            	$site->setNumSiteCommune($numSite);
             }
             
             $tesson->setSite($site);
            

             if($row['N° isolation 1']==""){
             	$numIsolation = $em -> getRepository('LIFOClassifBundle:NumIsolation')
             	-> findOneByNumero(0);
             	
             } else {
            	$numIsolation = $em -> getRepository('LIFOClassifBundle:NumIsolation')
            						-> findOneByNumero($row['N° isolation 1']);
             }
            if(!is_object($numIsolation)){
            	$numIsolation = new NumIsolation();
            	if($row['N° isolation 1']!=""){
	            	$numIsolation->setNumero($row['N° isolation 1']);
            	} else {
            		$numIsolation->setNumero(0);
            	}
            }
            $tesson->setNumIsolation($numIsolation);


            if($row['US']==""){
	            $us = $em -> getRepository('LIFOClassifBundle:US')
	            		  -> findOneByNumero(0);
            } else {
	            $us = $em -> getRepository('LIFOClassifBundle:US')
	            		  -> findOneByNumero($row['US']);
            }
            if(!is_object($us)){
	            $us = new US();
	            if($row['US']!=""){
		            $us->setNumero($row['US']);
	            } else {
	            	$us->setNumero(0);
	            }
            }
            $tesson->setUs($us);
            
            if($row['Zone']!=""){
            	$zone = $em -> getRepository('LIFOClassifBundle:Zone')
            				-> findOneBy(
            						array('numero' => $row['Zone'],
            						'site' => $site));
	            if(!is_object($zone)){
	            	$zone = new Zone();
	            	$zone->setNumero($row['Zone']);
	            	$zone->setSite($site);
	            }
            }
            $nomMolette="";
            if($row['égal type'] != ""){
            	$nomMolette=$row['égal type'];
            	$egal=true;
            }
            if($row['équi type'] != ""){
            	$nomMolette=$row['équi type'];
            	$egal=false;
            }
            if($nomMolette != ""){
            	$molette = $em -> getRepository('LIFOClassifBundle:Molette')
            				   -> findOneByNom($nomMolette);
	            if(!is_object($molette)){
            		$molette=new Molette();
            		$molette->setNom($nomMolette);
	            }
            	$tessonMolette = $em -> getRepository('LIFOClassifBundle:TessonMolette')
            						 -> findOneBy(
            						array('egal' => $egal,
            						'molette' => $molette));
	            if(!is_object($tessonMolette)){
            		$tessonMolette=new TessonMolette();
            		$tessonMolette->setEgal($egal);
            		$tessonMolette->setMolette($molette);
	            }
            	if($row['molette référence'] == "oui"){
            		$molette->setReferencePar($tesson);
            	}
            	$tesson->setTessonMolette($tessonMolette);
            }

            $positionDecorArray=str_replace(array(" (?)","\r\n","\n","\r"),"",$row['position décor']);
            $positionDecorArray=str_replace(array(" et ",", "),",",$positionDecorArray);
            $positionDecorArray=str_replace("colerette","collerette",$positionDecorArray);
            $positionDecorArray=str_replace("panses","panse",$positionDecorArray);
            $positionDecorArray=trim($positionDecorArray);
			$positionDecorKeywords = preg_split("/[,]+/", $positionDecorArray);
			foreach ($positionDecorKeywords as $positionDecor){
	            if($positionDecor == "" || $positionDecor == "inconnu" || $positionDecor == "inconnue" || $positionDecor == "indéterminée"){
	            	$positionDecor="indéterminé";
	            }
	            $decor = $em -> getRepository('LIFOClassifBundle:Decor')
	            			 -> findOneByPosition($positionDecor);
	            if(!is_object($decor)){
	            	$decor = new Decor();
	            	$decor->setPosition($positionDecor);
	            }

				//Le constructeur de tesson ajoute aussi tesson à décor s'il n'existe pas, il fait les deux
				// sens de la bidirectionalité. De plus, il n'ajoute que s'il n'a pas déjà ce décor.
	            $tesson->addDecor($decor);
       			$em->persist($decor);
			}
			
			$typeDecorArray = str_replace("?","",$row['TYPE DE DÉCOR']);
            $typeDecorArray=str_replace(array(" et ",", "),",",$typeDecorArray);
            $typeDecorArray=trim($typeDecorArray);
			$typeDecorKeywords = preg_split("/[,]+/", $typeDecorArray);
			foreach ($typeDecorKeywords as $typeDecorNom){
	            if($typeDecorNom == "" || $typeDecorNom == "inconnu" || $typeDecorNom == "inconnue" || $typeDecorNom == "indéterminée"){
	            	$typeDecorNom="indéterminé";
	            }
				$typeDecor = $em -> getRepository('LIFOClassifBundle:TypeDecor')
								 -> findOneByNom($typeDecorNom);
				if(!is_object($typeDecor)){
					$typeDecor = new TypeDecor();
					$typeDecor->setNom($typeDecorNom);
				}
				$tesson->addTypeDecor($typeDecor);
				$em -> persist($typeDecor);
			}
	        $utilisateur = $em -> getRepository('LIFOClassifBundle:Utilisateur')
	       					   -> findOneByNom("Automatique");
	        if(!is_object($utilisateur)){
		        $utilisateur = new Utilisateur();
		        $utilisateur->setPrenom("Import CSV");
		        $utilisateur->setNom("Automatique");
	        }
	        $em->persist($utilisateur);
			$tesson->setEnregistrePar($utilisateur);
			$tesson->setDateEnregistrement(new \Datetime());
			
            
            $em->persist($site);
            $em->persist($numIsolation);
            $em->persist($us);
            if($row['Zone']!=""){
            	$em->persist($zone);
            }
            if($nomMolette!=""){
            	$em->persist($molette);
            	$em->persist($tessonMolette);
            }
            $em->persist($tesson);
            

            $em->flush();
			// Detaches all objects from Doctrine for memory save
            $em->clear();

           if (($i % $batchSize) === 0) {
				// Advancing for progress display on console
                $progress->advance($batchSize);
				
                $now = new \DateTime();
                $output->writeln(' -- '.$i.' tessons ajoutes ... | ' . $now->format('d-m-Y G:i:s'));

            }

            $i++;

        }
		
		// Flushing and clear data on queue
        $em->flush();
        $em->clear();
		
		// Ending the progress bar process
        $progress->finish();
    }

    protected function get(InputInterface $input, OutputInterface $output) 
    {
        // Getting the CSV from filesystem
        $fileName = 'web/uploads/import/molette.csv';
        
        // Using service for converting CSV to PHP Array
        $converter = $this->getContainer()->get('import.csvtoarray');
        $data = $converter->convert($fileName, ';');
        
        return $data;
    }
    
}