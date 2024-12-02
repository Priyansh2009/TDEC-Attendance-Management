const students = [{
    id: 1,
    name: "ABC",
    status: "",
    image: "https://via.placeholder.com/80"
  },
  {
    id: 2,
    name: "XYZ",
    status: "",
    image: "https://via.placeholder.com/80"
  }
];

function loadStudents() {
  const studentList = document.getElementById('student-list');
  studentList.innerHTML = '';

  students.forEach(student => {
    const studentCard = document.createElement('div');
    studentCard.className = 'student-card';
    studentCard.innerHTML = `
                <img src="${student.image}" alt="${student.name}">
                <p>${student.name}</p>
                <div class="attendance-options">
                    <button class="present" onclick="markAttendance(${student.id}, 'Present')">P</button>
                    <button class="absent" onclick="markAttendance(${student.id}, 'Absent')">A</button>
                    <button class="late" onclick="markAttendance(${student.id}, 'Late')">L</button>
                </div>
            `;
    studentList.appendChild(studentCard);
  });
}

function markAttendance(id, status) {
  const student = students.find(s => s.id === id);
  if (student) {
    student.status = status;
    alert(`${student.name} marked as ${status}`);
  }
}

function saveAttendance() {
  console.log('Attendance saved:', students);
  alert('Attendance saved successfully!');
}