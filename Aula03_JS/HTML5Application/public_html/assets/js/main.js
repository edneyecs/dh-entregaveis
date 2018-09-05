

    window.onload = function()
    {
        const titulo = document.getElementById("titular").style.display = "none";
        console.log (titulo);
    
        const coruja = document.querySelector("#lechuza").style.filter = "grayscale(100%)";
    
        const input = document.querySelectorAll("input").forEach( function(element){
            element.style.background = 'red';
        });
        
        const textarea = document.querySelectorAll("textarea").forEach( function(element){
            element.style.background = 'red';
        });
        
        const copyright = document.querySelector("#copyright");
        console.log ( copyright.attributes);
        
        const twitter = document.querySelector(".icon.fa-twitter");
        console.log ( twitter.getAttribute("href"));
        
        const facebook = document.querySelector(".icon.fa-facebook");
        console.log ( facebook.getAttribute("href"));
        
        const facebook2 = document.querySelector(".icon.fa-facebook");
        console.log("A URL do facebook e: " + facebook2.href);
        
        const youtube = document.querySelector(".icon.fa-youtube");
        youtube.setAttribute("href","http:///www.google.com.br");
        console.log ( youtube.getAttribute("href"));
        
        const form = document.querySelector("form");
        form.hasAttribute ("action");
        console.log ( form.hasAttribute("action"));
        
        const aform =  document.querySelector("form");
        form.setAttribute ("action", "http:///www.google.com.br");
        console.log( form.hasAttribute("action"));
        
        const h2cor = document.querySelectorAll("h2").forEach(function(element){
            element.style.color = "red";
        });
        
        const icon = document.querySelectorAll(".icon").forEach( function(element) {
            element.style.background = "red";
        });
    
       
        const button = document.createElement("button");
        const buttonText = document.createTextNode("Desaparece");
        button.appendChild(buttonText);
        document.getElementById("abracadabra").appendChild(button);
        //console.log(button.attributes);
        
        const social = document.getElementsByClassName (".social");
        const icon2 = document.getElementsByClassName(".icon.fa-foursquare");
        social.removeChild(icon2);
        console.log(social.attributes);
        
        
        
    }
        
      

