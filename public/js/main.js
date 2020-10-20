
let action_button = document.querySelector('.action_button');
let rating_point = document.querySelector('.wrapper_estimation');

rating_point.addEventListener('click', (e) =>{
    let value_attribute = e.target.getAttribute('value');
    let number_str = document.querySelector('.number');
    number_str.innerHTML = value_attribute;
})

/*action_button.addEventListener('click', (e)=>{
    let value_inner = action_button.innerHTML;

    let query = new XMLHttpRequest();
    query.open('GET', 'test.json', false);
    query.send();
    alert(query.responseText);
})*/