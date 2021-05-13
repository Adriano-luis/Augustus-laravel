var menuRelatorio = document.querySelectorAll('.menu a');
var menuRelatorioContainer = document.querySelector('.menu-relatorio');
var interna = document.querySelector('.interna');
var forma = document.querySelector('.formasdeaproveitamento');
var abertura = document.querySelector('.abertura');
var linkInterna = document.querySelectorAll('.linkInterna');
var linkForma = document.querySelectorAll('.linkForma');
var adicionarEmpresa = document.querySelector('#add');
var entrarEmpresa = document.querySelectorAll('.entrar');
var lixeira = document.querySelectorAll('.lixeira');
var nao = document.querySelectorAll('.nao');
var sim = document.querySelectorAll('.sim');
var voltar = document.querySelector('.voltar');
var tagLabel = document.querySelectorAll('.tag-label');

var toggleState = function (elem, one, two) {
    var elem = document.querySelector(elem);
    elem.setAttribute('data-state', elem.getAttribute('data-state') === one ? two : one);
};

function bemvindo(e) {
    e.previousElementSibling.classList.add('show');
    e.style.display = "none";
}

function login() {
    window.location.hash = 'cadastro';
}

function select(e){
    e.parentNode.classList.add('showoptions');
    e.nextElementSibling.classList.add('open');
}

function getOptions(e){
    var textarea = e.parentNode.previousElementSibling.firstElementChild;
    var checkboxes = e.parentNode.getElementsByTagName('input');
    var vals = "";
    var auxCheck;
    for (var i=0, n=checkboxes.length;i<n;i++) 
    {
        if (checkboxes[i].checked) 
        {
        	auxCheck = checkboxes[i].value.split("-");
            vals += ","+auxCheck[1];
        }
    }
    if (vals) vals = vals.substring(1).replace(/,/g, ' / ');
    textarea.innerHTML = vals;
    textarea.classList.add('filled');
    textarea.style.cssText = 'height:auto; padding:0';
    var height = textarea.scrollHeight + 32;
    textarea.style.cssText = 'height:' + height + 'px';
    e.parentNode.parentNode.classList.remove('showoptions');
    e.parentNode.classList.remove('open');
    if (vals.substring(1) === '') {
        textarea.classList.remove('filled');
        textarea.style.cssText = '';
    }
}

function enviar(e) {
    enterModal();
    document.getElementById('modal').setAttribute('data-modal', 'enviar');
    menuRelatorioContainer.setAttribute('data-menu', '');
    menuRelatorioContainer.classList.remove('active');
    document.querySelector('.exportar').classList.remove('active');
}

function verRelatorio(e) {
    enterModal();
    document.getElementById('modal').setAttribute('data-modal', 'relatorio');
}

function enterModal() {
    document.getElementById('relatorio').style.transform = "translateX(100vw)";
    document.getElementById('cadastro-empresa').style.transform = "translateX(100vw)";
    document.getElementById('cadastrar').style.transform = "translateX(-100vw)";
    document.getElementById('principal').style.transform = "translateX(-100vw)";
    document.getElementById('modal').classList.add('active');
}

function exitModal() {
    document.getElementById('relatorio').style.transform = "";
    document.getElementById('cadastro-empresa').style.transform = "";
    document.getElementById('cadastrar').style.transform = "";
    document.getElementById('principal').style.transform = "";
    document.getElementById('modal').classList.remove('active');
    document.getElementById('modal').setAttribute('data-modal', '');
    interna.setAttribute('data-link', '');
    interna.style.transform = '';
    abertura.style.transform = '';
    forma.setAttribute('data-forma', '');
    forma.style.transform = '';
}

function copiar(e) {
    var conteudo = e.parentNode.previousElementSibling;
    var copyText = conteudo.innerHTML;
    copyToClipboard(copyText);
    alert("Cópia realizada com sucesso.");
}

const copyToClipboard = str => {
    const el = document.createElement('textarea');  // Create a <textarea> element
    el.value = str;                                 // Set its value to the string that you want copied
    el.setAttribute('readonly', '');                // Make it readonly to be tamper-proof
    el.style.position = 'absolute';                 
    el.style.left = '-9999px';                      // Move outside the screen to make it invisible
    document.body.appendChild(el);                  // Append the <textarea> element to the HTML document
    const selected =            
        document.getSelection().rangeCount > 0        // Check if there is any content selected previously
        ? document.getSelection().getRangeAt(0)     // Store selection if found
        : false;                                    // Mark as false to know no selection existed before
    el.select();                                    // Select the <textarea> content
    document.execCommand('copy');                   // Copy - only works as a result of a user action (e.g. click events)
    document.body.removeChild(el);                  // Remove the <textarea> element
    if (selected) {                                 // If a selection existed before copying
        document.getSelection().removeAllRanges();    // Unselect everything on the HTML document
        document.getSelection().addRange(selected);   // Restore the original selection
    }
};

function voltarInterna() {
    interna.setAttribute('data-link', '');
    interna.style.transform = '';
    abertura.style.transform = '';
}

function voltarForma() {
    forma.setAttribute('data-forma', '');
    forma.style.transform = '';
    interna.style.transform = 'translateX(-100%)';
}

(function(){

    let vh = window.innerHeight * 0.01;
    document.documentElement.style.setProperty('--vh', `${vh}px`);

    window.addEventListener('resize', () => {
        let vh = window.innerHeight * 0.01;
        document.documentElement.style.setProperty('--vh', `${vh}px`);
    });

    function changeNav() {
        toggleState('#principal', 'open', 'closed');
        toggleState('#cadastrar', 'closed', 'open');
        window.location.hash = 'dados';
    }

    adicionarEmpresa.onclick = function (e) {
        changeNav();
    };

    entrarEmpresa.forEach(function(el, index) {
        el.onclick = function (e) {
            changeNav();
        };
    });

    lixeira.forEach(function(el, index) {
        el.onclick = function (e) {
            var card = el.parentNode.parentNode.parentNode;
            card.setAttribute('data-lixeira','open');
        };
    });
    
    nao.forEach(function(el, index) {
        el.onclick = function (e) {
            var card = el.parentNode.parentNode.parentNode;
            card.setAttribute('data-lixeira','closed');
        };
    });

    sim.forEach(function(el, index) {
        el.onclick = function (e) {
            var card = el.parentNode.parentNode.parentNode;
            card.setAttribute('data-lixeira','closed');
        };
    });

    voltar.onclick = function (e) {
        toggleState('#principal', 'closed', 'open');
        toggleState('#cadastrar', 'open', 'closed');
        window.location.hash = 'cadastro';
    };

    menuRelatorio.forEach(function(el, index) {
        el.onclick = function (e) {
            if(el.classList.contains('active') === true) {
                el.classList.remove('active');
                menuRelatorioContainer.setAttribute('data-menu', '');
                menuRelatorioContainer.classList.remove('active');
                console.log('if');
            } else {
                for (var i = 0; i < menuRelatorio.length; i++) {
                    menuRelatorio[i].classList.remove('active');
                }
                var menuClass = el.className;
                menuRelatorioContainer.setAttribute('data-menu', menuClass);
                menuRelatorioContainer.classList.add('active');
                el.classList.add('active');
                console.log('else');
            }
        };
    });

    tagLabel.forEach(function(el, index) {
        el.onclick = function (e) {
            menuRelatorioContainer.setAttribute('data-menu', '');
            menuRelatorioContainer.classList.remove('active');
            document.querySelector('.tag').classList.remove('active');
        };
    });

    linkInterna.forEach(function(el, index) {
        el.onclick = function (e) {
            var dataLink = el.getAttribute("data-link");
            interna.setAttribute('data-link', dataLink);
            interna.style.transform = 'translateX(-100%)';
            abertura.style.transform = 'translateX(-100%)';
        };
    });

    linkForma.forEach(function(el, index) {
        el.onclick = function (e) {
            var dataLink = el.getAttribute("data-forma");
            forma.setAttribute('data-forma', dataLink);
            forma.style.transform = 'translateX(-100%)';
            interna.style.transform = 'translateX(-200%)';
        };
    });

    var sections = ['cadastro','cadastro-empresa','noticias','noticias-interna','usuario','sobre','faleconosco','dados','ramos','tributacao','funcionarios','previdencia','comercioexterior','relacionamento','outros','relatorio'];
    var body = document.body;

    if (['#cadastro','#cadastro-empresa','#noticias','#noticias-interna','#usuario','#sobre','#faleconosco','#dados','#ramos','#tributacao','#funcionarios','#previdencia','#comercioexterior','#relacionamento','#outros','#relatorio'].indexOf(window.location.hash) >= 0) {
    locationHashChanged();
    } else {
    window.location.hash = '#login';
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
        
        if (location.hash === '#cadastro') {
            document.querySelector('#principal').setAttribute('data-state', 'open');
        }  

        menuRelatorioContainer.setAttribute('data-menu', '');
        menuRelatorioContainer.classList.remove('active');
        document.querySelector('.tag').classList.remove('active');
        document.querySelector('.exportar').classList.remove('active');
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

    function textareaFilled() {
        Array.prototype.forEach.call(document.querySelectorAll('.select>textarea, .field>textarea'), function(item) {
            if (item.value === '') {
            item.classList.remove('filled');
            } else {
            item.classList.add('filled');
            }
            item.addEventListener('keydown', function (el) {
                el.target.style.cssText = 'height:auto; padding:0';
                var height = el.target.scrollHeight + 32;
                el.target.style.cssText = 'height:' + height + 'px';
            });
            item.addEventListener('change', function (el) {
            if (el.target.value === '') {
                el.target.classList.remove('filled');
            } else {
                el.target.classList.add('filled');
            }
            }, false);
        });
    }

    function fieldsFilled() {
        Array.prototype.forEach.call(document.querySelectorAll('.field>input'), function(item) {
            if (item.value === '') {
            item.classList.remove('filled');
            } else {
            item.classList.add('filled');
            }
            item.addEventListener('change', function (el) {
            if (el.target.value === '') {
                el.target.classList.remove('filled');
            } else {
                el.target.classList.add('filled');
            }
            }, false);
        });
    }

    window.onload = function(){
        fieldsFilled();
        textareaFilled();
        document.querySelector('#principal').setAttribute('data-state', 'closed');
    }

    var sliderSections = ['noticias','tributacao','previdencia','comercioexterior','relacionamento','outros','relatorio'];

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