
let checkbox = document.querySelectorAll(' body .checkbox');



for (let i = 0; i < checkbox.length; i++) {
    checkbox[i].addEventListener("change", checkedOrNot);
}

function checkboxCheck() {
    let is_checked = this.checked;

    if (is_checked) { //checked
        console.log('checked');
    } else { //unchecked
        console.log('unchecked');
    }
}
