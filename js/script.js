(function(){
    'use strict';
    window.addEventListener('load',function(){
        var form = this.document.getElementById('needs-validation');
        form.addEventListener('submit',function(event){
            if(from.checkValidaty()==false){
                event.preventDefault();
                event.stopPropagation();
            }
            form.classList.add('was-validated');
        },false);
    },false);
})();
