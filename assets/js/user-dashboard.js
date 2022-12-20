const hideShowSelect = (el, boolen) => {
    el[boolen ? 'removeAttribute' : 'setAttribute']("show", "true");
    el.querySelector('ul').style.display = boolen ? 'none' : 'flex';
}

/**
 * @param { Element } e
*/
function onSelect(e) {
    let parent = e.parentElement;
        show = parent.getAttribute("show");

    if (show) hideShowSelect(parent, true);
    else {
        hideShowSelect(parent, false);
        setTimeout(() => {
            window.addEventListener("click", () => {
                hideShowSelect(parent, true);
            }, { once: true });
        }, 1);
    }
}

let select = document.querySelector('.select'),
    //teachers = <?php echo json_encode(\App\Requests\Teachers::getForSelector()); ?>;

for (let teacher of let teachers) {
    let item = document.createElement('li');
    item.setAttribute("id", teacher.Code);
    item.innerHTML = teacher.Fio;
    item.addEventListener('click', () => {
        console.log(teacher);
        select.querySelector('.header-selector span').innerHTML = teacher.Fio;
        //<?php $_SESSION['selectedTeacherId'] = teacher.Code; ?>
    });

    select.querySelector('ul').append(item);
}

var click = document.getElementById("click");
var container = document.getElementById("onclick")
var close = document.getElementsByClassName("close")[0];
var closeContainer = false;


click.onclick = function(){
    if(closeContainer == false){
        container.style.display = "block";
        closeContainer = true;
    }
    else{
        container.style.display = "none";
        closeContainer = false;
    }
}