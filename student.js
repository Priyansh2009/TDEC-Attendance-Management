// script.js

document.getElementById("studentForm").addEventListener("submit", function (e) {
    e.preventDefault();

    // Get form data
    const name = document.getElementById("name").value;
    const email = document.getElementById("email").value;
    const contact = document.getElementById("contact").value;

    // Add teacher to table
    addStudent(name, email, contact);

    // Clear the form
    this.reset();
});

function addStudent(name, email, contact) {
    const table = document.getElementById("teacherTable");
    const row = document.createElement("tr");

    row.innerHTML = `
        <td>${name}</td>
        <td>${email}</td>
        <td>${contact}</td>
        <td><button class="delete-btn" onclick="deleteTeacher(this)">Delete</button></td>
    `;

    table.appendChild(row);
}

function deleteStudent(button) {
    const row = button.parentElement.parentElement;
    row.remove();
}
