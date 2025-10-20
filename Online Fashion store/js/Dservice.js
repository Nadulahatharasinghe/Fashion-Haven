// Function to load data from local storage and populate the table
function loadEmployees() {
    const employees = JSON.parse(localStorage.getItem('employees')) || [];
    const tableBody = document.getElementById('tableBody');
    tableBody.innerHTML = '';

    employees.forEach((employee, index) => {
        let row = `<tr>
            <td>${employee.name}</td>
            <td>${employee.courierId}</td>
            <td>${employee.phone}</td>
            <td>${employee.email}</td>
            <td>${employee.company}</td>
            <td>
                <button class="edit-btn" onclick="editEmployee(${index})">Edit</button>
                <button class="delete-btn" onclick="deleteEmployee(${index})">Delete</button>
            </td>
        </tr>`;
        tableBody.innerHTML += row;
    });
}

// Function to add or update employee details
function saveEmployee(event) {
    event.preventDefault();

    const name = document.getElementById('name').value;
    const courierId = document.getElementById('cid').value;
    const phone = document.getElementById('phone').value;
    const email = document.getElementById('email').value;
    const company = document.getElementById('cname').value;
    const index = document.getElementById('index').value;

    let employees = JSON.parse(localStorage.getItem('employees')) || [];

    const employee = { name, courierId, phone, email, company };

    if (index === '') {
        // Create new employee
        employees.push(employee);
    } else {
        // Update existing employee
        employees[index] = employee;
        document.getElementById('index').value = '';  // Clear the index
    }

    localStorage.setItem('employees', JSON.stringify(employees));
    loadEmployees();
    document.getElementById('adminForm').reset();
}

// Function to edit an employee
function editEmployee(index) {
    const employees = JSON.parse(localStorage.getItem('employees'));
    const employee = employees[index];

    document.getElementById('name').value = employee.name;
    document.getElementById('cid').value = employee.courierId;
    document.getElementById('phone').value = employee.phone;
    document.getElementById('email').value = employee.email;
    document.getElementById('cname').value = employee.company;
    document.getElementById('index').value = index; // Save index for updating
}

// Function to delete an employee
function deleteEmployee(index) {
    let employees = JSON.parse(localStorage.getItem('employees'));
    employees.splice(index, 1); // Remove the employee from array

    localStorage.setItem('employees', JSON.stringify(employees));
    loadEmployees();
}

// Event listener for form submission
document.getElementById('adminForm').addEventListener('submit', saveEmployee);

// Load data when the page is loaded
window.onload = loadEmployees;