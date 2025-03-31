class Person {
    constructor(id, name, age, gpa) {
        this.id = id;
        this.name = name;
        this.age = age;
        this.gpa = gpa;
    }
}

const nameInput = document.getElementById('name');
const ageInput = document.getElementById('age');
const ageValue = document.getElementById('ageValue');
const gpaInput = document.getElementById('gpa');
const resetBtn = document.getElementById('resetBtn');
const createBtn = document.getElementById('createBtn');
const personButtons = document.getElementById('personButtons');
const personInfo = document.getElementById('personInfo');

// mảng lưu trữ thông tin
const persons = [];

// tuổi thay đổi khi kéo thanh trượt
ageInput.addEventListener('input', function() {
    ageValue.textContent = this.value;
});

resetBtn.addEventListener('click', function() {
    nameInput.value = '';
    ageInput.value = 25;
    ageValue.textContent = '25';
    gpaInput.value = '';

    persons.length = 0; // Đặt lại mảng về rỗng
    personButtons.innerHTML = ''; // Xóa nút tên trên giao diện
    personInfo.innerHTML = ''; // Xóa thông tin đang hiển thị
});

createBtn.addEventListener('click', function() {

    if (!nameInput.value || !gpaInput.value) {
        alert('Please fill in all fields');
        return;
    }

    const newPerson = new Person(
        Date.now(), // dùng thời gian để đảm bảo duy nhất
        nameInput.value,
        parseInt(ageInput.value),
        parseFloat(gpaInput.value)
    );

    // đẩy vào mảng
    persons.push(newPerson);

    const personBtn = document.createElement('button');
    personBtn.textContent = newPerson.name;
    personBtn.addEventListener('click', () => {
        // click vào button sẽ hiển thị thông tin
        personInfo.innerHTML = `
            <h3>Person Information</h3>
            <p><strong>ID:</strong> ${newPerson.id}</p>
            <p><strong>Name:</strong> ${newPerson.name}</p>
            <p><strong>Age:</strong> ${newPerson.age}</p>
            <p><strong>GPA:</strong> ${newPerson.gpa}</p>
        `;
    });

    personButtons.appendChild(personBtn);

    // xóa trong label khi tạo xong
    nameInput.value = '';
    ageInput.value = 25;
    ageValue.textContent = '25';
    gpaInput.value = '';
});