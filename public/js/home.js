var lixeira = document.querySelectorAll('.lixeira');
var nao = document.querySelectorAll('.nao');
var sim = document.querySelectorAll('.sim');

var toggleState = function (elem, one, two) {
    var elem = document.querySelector(elem);
    elem.setAttribute('data-state', elem.getAttribute('data-state') === one ? two : one);
};

function select(e){
    e.parentNode.classList.add('showoptions');
    e.nextElementSibling.classList.add('open');
}

function getOptions(e){
    var textarea = e.parentNode.previousElementSibling.firstElementChild;
    var checkboxes = e.parentNode.getElementsByTagName('input');
    var vals = "";
    for (var i=0, n=checkboxes.length;i<n;i++) 
    {
        if (checkboxes[i].checked) 
        {
            vals += ","+checkboxes[i].value;
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


function enterModal() {
    document.getElementById('cadastro-empresa').style.transform = "translateX(100vw)";
    document.getElementById('principal').style.transform = "translateX(-100vw)";
    document.getElementById('modal').classList.add('active');
}

function exitModal() {
    document.getElementById('cadastro-empresa').style.transform = "";
    document.getElementById('principal').style.transform = "";
    document.getElementById('modal').classList.remove('active');
    document.getElementById('modal').setAttribute('data-modal', '');
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

(function(){

    let vh = window.innerHeight * 0.01;
    document.documentElement.style.setProperty('--vh', `${vh}px`);

    window.addEventListener('resize', () => {
        let vh = window.innerHeight * 0.01;
        document.documentElement.style.setProperty('--vh', `${vh}px`);
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

    var sections = ['cadastro','cadastro-empresa','noticias','noticias-interna','usuario','sobre','faleconosco','dados','editar-dados'];
    var body = document.body;

    if (['#cadastro','#cadastro-empresa','#noticias','#noticias-interna','#usuario','#sobre','#faleconosco','#dados','#editar-dados'].indexOf(window.location.hash) >= 0) {
    locationHashChanged();
    } else {
    window.location.hash = '#cadastro';
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
    }

    var slider = tns({
        container: '.slider-noticias',
        controlsContainer: '.slider-noticias-controls',
        nav: false,
        loop: false,
        gutter: 100
    });

})();