// script.js

document.getElementById("classrForm").addEventListener("submit", function (e) {
    e.preventDefault();

    // Get form data
    const classname = document.getElementById("classname").value;
    const classteacher = document.getElementById("classteacher").value;
    const studentlimit = document.getElementById("studentlimit").value;

    // Add teacher to table
    addclass(classname, classteacher, studentlimit);

    // Clear the form
    this.reset();
});

function addclass(classname, classteacher, studentlimit) {
    const table = document.getElementById("classTable");
    const row = document.createElement("tr");

    row.innerHTML = `
        <td>${classname}</td>
        <td>${classteacher}</td>
        <td>${studentlimit}</td>
        <td><button class="delete-btn" onclick="deleteclass(this)">Delete</button></td>
    `;

    table.appendChild(row);
}

function deleteTeacher(button) {
    const row = button.parentElement.parentElement;
    row.remove();
}
