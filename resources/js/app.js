import './bootstrap';


function list_details_Manage(){
    let show_groups = document.querySelector('#show-groups');
    let groupes =document.querySelector('.groupes');

    let show_members =document.querySelector('#show-members');
    let members = document.querySelector('.membres');

    show_groups.addEventListener('click', ()=>{
        event.preventDefault();
        members.classList.remove('showed-members')
        groupes.classList.toggle('showed-groups');
        show_groups.classList.add('active')
        show_members.classList.remove('active')
    })

    

    show_members.addEventListener('click', ()=>{
        event.preventDefault();
        groupes.classList.remove('showed-groups');
        members.classList.toggle('showed-members')
        show_members.classList.add('active')
        show_groups.classList.remove('active')
    })
}


function list_make_manager(){
    let type =document.querySelector('.saisir-list');
    let down =document.querySelector('.telecharger-list');

    let list_download =document.querySelector('.list-down');
    let list_type =document.querySelector('.list-type');

    type.addEventListener('click', ()=>{
        list_download.classList.toggle('desactive-down');
        list_type.classList.toggle('active-type');
        type.classList.toggle('disactive-type-btn');
        down.classList.toggle('active-down-btn');

    })

    down.addEventListener('click', ()=>{
        list_download.classList.remove('desactive-down');
        list_type.classList.remove('active-type');
        type.classList.remove('disactive-type-btn');
        down.classList.remove('active-down-btn');
    })
}

list_details_Manage();
list_make_manager();
