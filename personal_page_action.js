document.getElementById('displayName').textContent = localStorage.getItem('name');
document.getElementById('displayEmail').textContent = localStorage.getItem('email');
document.getElementById('displayPhoto').src = localStorage.getItem('photo');
document.getElementById('displayAboutMe').textContent = localStorage.getItem('aboutMe');