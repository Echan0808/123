     window.onload = function show() {
         //弹出盒子
         var alertPart = document.getElementById("alert");
         alertPart.style.display = "block";
         alertPart.style.position = "absolute";
         alertPart.style.top = "50%";
         alertPart.style.left = "50%";
         alertPart.style.marginTop = "730px";
         alertPart.style.marginLeft = "-150px";
         alertPart.style.background = "rgb(86,143, 100)";
         alertPart.style.opacity = "0.95";
         alertPart.style.width = "300px";
         alertPart.style.height = "300px";
         alertPart.style.border = "1px solid transparent";
         alertPart.style.zIndex = "501";

         //遮罩层
         var mybg = document.createElement("shadow");
         mybg.setAttribute("id", "mybg");
         mybg.style.background = "rgb(86, 143, 100)";
         mybg.style.width = "100%";
         mybg.style.height = "896px";
         mybg.style.position = "absolute";
         mybg.style.top = "869px";
         mybg.style.zIndex = "500";
         mybg.style.opacity = "0.35";
         mybg.style.filter = "Alpha(opacity=35)";
         document.body.appendChild(mybg);
         document.body.style.overflow = "hidden";
     }

     function show() {
         //弹出盒子
         var alertPart = document.getElementById("alert");
         alertPart.style.display = "block";
         alertPart.style.position = "absolute";
         alertPart.style.top = "50%";
         alertPart.style.left = "50%";
         alertPart.style.marginTop = "730px";
         alertPart.style.marginLeft = "-150px";
         alertPart.style.background = "rgb(86,143, 100)";
         alertPart.style.opacity = "0.95";
         alertPart.style.width = "300px";
         alertPart.style.height = "300px";
         alertPart.style.border = "1px solid transparent";
         alertPart.style.zIndex = "501";
     }

     function hide(alert, shadow) {
         document.getElementById("alert").style.display = "none";
         document.getElementById("mybg").style.display = "none";
     }