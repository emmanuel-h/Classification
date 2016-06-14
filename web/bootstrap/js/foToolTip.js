/*----------------------------------------------------------------------------\\
|                                foToolTip.js v1.0                            |
|-----------------------------------------------------------------------------|
|                         Created by Christian Fobec.com                      |
| http://www.fobec.com/tuto/1121/bulle-aide-tooltip-basique-support-ajax.html |
|-----------------------------------------------------------------------------|
|      static custom ToolTip with ajax support                                |
|-----------------------------------------------------------------------------|*/
 
/**
 * FoToolTip main class
 */
function FoToolTip() {
    var tt_id="fotooltip";
    var tt_bgcolor="#FFFFCC";
    var tt_bordercolor="#FFE2A6";
/** créer l'objet ToolTip   assigner les evt au 'parent'  */
    this.init=function (obj,text) {
        tt=getInstance();
        tt.style.display='block';
        obj.onmousemove=mouseMouveEx;
        obj.onmouseout=hide;
        loadcontent(text);
    }
/** private: Charger le contenu du ToolTip */
    function loadcontent(text) {
        tt=getInstance();
        if (text.substr(0,4)!='http') {
            tt.innerHTML=text;
        } else {
            tt.innerHTML='Chargement en cours ...';
           /* new ajax().request(text,
            {
                request:'GET',
                onresponse:function(response, success) {
                    tt=getInstance();
                    tt.innerHTML=response;
                }
            });*/
        }
    }
/** private: cacher le ToolTip */
    function hide() {
        tt=getInstance();
        tt.style.display='none';
    }
/** private: deplacer le ToolTip**/
    function mouseMouveEx(e) {
        var pos=getPos(e);
        tt=getInstance();
        tt.style.left=(pos.x+20)+"px";
        tt.style.top=pos.y+"px";
    }
/** private: retourne un nouveau ToolTip ou instance en cours**/
    function getInstance() {
        var tt=document.getElementById(tt_id);
        if (!tt) {
            tt=document.createElement("div");
            tt.style.position="absolute";
            tt.style.backgroundColor=tt_bgcolor;
            tt.style.border='1px solid '+tt_bordercolor;
            tt.style.padding="5px";
            tt.id=tt_id;
            document.body.appendChild(tt);
            console.debug("create new foToolTip");
            return tt;
        } else {
            return tt;
        }
    }
/** private: position du curseur */
    function getPos(e) {
        e = e || window.event;
        var cursor = {
            x:0,
            y:0
        };
        if (e.pageX || e.pageY) {
            cursor.x = e.pageX;
            cursor.y = e.pageY;
        }
        else {
            cursor.x = e.clientX
            (document.documentElement.scrollLeft ||
                document.body.scrollLeft) -
            document.documentElement.clientLeft;
            cursor.y = e.clientY
            (document.documentElement.scrollTop ||
                document.body.scrollTop) -
            document.documentElement.clientTop;
        }
        return cursor;
    }
}
 
/**
 * Static Call de ToolTip, faciliter l'utilisaton du TooTip
 */
FoToolTip.show=function(obj,text) {
    var foToolTip=new FoToolTip();
    foToolTip.init(obj, text);
};
