(function(){

    let vh = window.innerHeight * 0.01;
    document.documentElement.style.setProperty('--vh', `${vh}px`);

    window.addEventListener('resize', () => {
        let vh = window.innerHeight * 0.01;
        document.documentElement.style.setProperty('--vh', `${vh}px`);
    });

    menuRelatorio.forEach(function(el, index) {
        el.onclick = function (e) {
            if(el.classList.contains('active') === true) {
                el.classList.remove('active');
                menuRelatorioContainer.setAttribute('data-menu', '');
                menuRelatorioContainer.classList.remove('active');
            } else {
                for (var i = 0; i < menuRelatorio.length; i++) {
                    menuRelatorio[i].classList.remove('active');
                }
                var menuClass = el.className;
                menuRelatorioContainer.setAttribute('data-menu', menuClass);
                menuRelatorioContainer.classList.add('active');
                el.classList.add('active');
            }
        };
    });

    var sections = ['dados','ramos','tributacao','funcionarios','previdencia','comercioexterior','relacionamento','outros','relatorio','loading'];
    var body = document.body;

    if (['#dados','#ramos','#tributacao','#funcionarios','#previdencia','#comercioexterior','#relacionamento','#outros','#relatorio','#loading'].indexOf(window.location.hash) >= 0) {
    locationHashChanged();
    } else {
    window.location.hash = '#dados';
    }

    function locationHashChanged() {  

        var hash = location.hash.substring(1);
        var menu = location.hash;

        if (location.hash === menu) {
        
            body.className = '';

            body.classList.toggle('section-'+hash);
            var section = document.querySelector('#' + hash);
            if(section) section.scrollTop = 0;
        }
        

        menuRelatorioContainer.setAttribute('data-menu', '');
        menuRelatorioContainer.classList.remove('active');
        document.querySelector('.tag').classList.remove('active');
        // document.querySelector('.exportar').classList.remove('active');
        document.querySelector('.filtro').classList.remove('active');
    }  
        
    window.onhashchange = locationHashChanged;

    function classifier(el) {
        var classClick = document.querySelector('.' + el);
        if(classClick) {
            classClick.addEventListener('click', function(e) {
                window.location.hash = el;
            });
        }
    }

    sections.forEach(function(value, index) {
        classifier(value);
    });


    var sliderSections = ['tributacao','previdencia','comercioexterior','relacionamento','outros','relatorio'];

    for (var i = 0; i < sliderSections.length; i++) {
        sliderSections[i] = tns({
            container: '.slider-'+sliderSections[i]+'',
            controlsContainer: '.slider-'+sliderSections[i]+'-controls',
            nav: false,
            loop: false,
            gutter: 100
        });
    }

})();