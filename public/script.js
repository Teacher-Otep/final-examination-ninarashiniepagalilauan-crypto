function showSection(id){
    document.querySelectorAll(".section").forEach(s => s.style.display="none");

    const active = document.getElementById(id);
    active.style.display="flex";
    active.style.flexDirection="column";
    active.style.alignItems="center";
}

function editStudent(id,name,surname,middlename,address,contact){
    showSection('update');

    document.getElementById('edit_id').value = id;
    document.getElementById('edit_name').value = name;
    document.getElementById('edit_surname').value = surname;
    document.getElementById('edit_middlename').value = middlename;
    document.getElementById('edit_address').value = address;
    document.getElementById('edit_contact').value = contact;
}