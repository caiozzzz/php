var banners = ["img/destaque-home.png", "img/destaque-home-2.png" ];
var bannerAtual=0;

function trocabanner () {
    bannerAtual = (bannerAtual + 1) % 2;
    document.querySelector ('.banner-destaque img').src = banners[bannerAtual];
}

var time = setInterval(trocabanner, 4000);
var controle = document.querySelector ('.pause');

controle. onclick = function () {
    if (controle.className == 'pause')
    {clearInterval(time);
     controle.className = 'play'   
    } else {
        time = setInterval(trocabanner, 4000);
        controle.className = 'pause' ;
    } 

    return false;  
};

<script type="text/javascript" src="js/home.js"></script>

