(function(win, doc){
    'use strict'; 
    
    function confirmDel(event){
        event.preventDefault();
        let token = doc.getElementsByName("_token")[0].value;

        if(confirm("Deseja mesmo deletar?")){
            let ajax = new XMLHttpRequest();
            ajax.open('delete',event.target.parentNode.href);
            ajax.setRequestHeader('X-CSRF-TOKEN',token);
            ajax.onreadystatechange = function(){
                if(ajax.readyState === 4 && ajax.status === 200){
                    var url = window.location.pathname;
                    win.location.href = url;
                }
            }
            ajax.send();
        }else{
            return false;
        }
    }
        
    //////////// DELETE Departamento  \\\\\\\\\\\\\\\
    if(doc.querySelector('.js-del-dep')){
        let btn = doc.querySelectorAll('.js-del-dep');
        for(let i = 0; i < btn.length; i++){
            btn[i].addEventListener('click',confirmDel);
        }
    }

    //////////// DELETE Funcioanrio  \\\\\\\\\\\\\\\
    if(doc.querySelector('.js-del-fun')){
        let btn = doc.querySelectorAll('.js-del-fun');
        for(let i = 0; i < btn.length; i++){
            btn[i].addEventListener('click',confirmDel);
        }
    }


})(window, document);
