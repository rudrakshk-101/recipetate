// // Array to store registered users
// const users = [];

// // Function to register a new user
// function registerUser(event) {
//   event.preventDefault();
//   const username = document.getElementById('username').value;
//   const password = document.getElementById('password').value;

//   // Check if the username is already taken
//   if (users.some(user => user.username === username)) {
//     alert('Username already taken!');
//     return;
//   }

//   // Add the new user to the array
//   users.push({ username, password });
//   alert('Registration successful! You can now log in.');
//   document.getElementById('registrationForm').reset();
// }

// // Function to handle login
// function loginUser(event) {
//   event.preventDefault();
//   const loginUsername = document.getElementById('username').value;
//   const loginPassword = document.getElementById('password').value;

//   // Find the user in the array
//   const user = users.find(user => user.username === loginUsername);

//   // Check if the user exists and the password matches
//   if (user && user.password === loginPassword) {
//     alert('Login successful! Welcome, ' + user.username + '!');
//     document.getElementById('loginForm').reset();
//   } else {
//     alert('Invalid username or password!');
//   }
// }

// // Add event listeners to the forms
// document.getElementById('registrationForm').addEventListener('submit', registerUser);
// document.getElementById('loginForm').addEventListener('submit', loginUser);
