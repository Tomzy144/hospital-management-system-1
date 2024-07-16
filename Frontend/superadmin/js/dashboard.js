function displayUserProfile(){
    document.querySelector(".profile_account").classList.toggle("hide");
};
//////////////////////////////////////////

const sections = document.querySelectorAll('.section');
const allProfiles = document.querySelectorAll('.allProfiles');
const links = document.querySelectorAll('.sidebar-body ul li');

function toggleSidebarLinks(clickedLink){
    links.forEach(link => link.classList.remove('active'));
    clickedLink.classList.add('active');
 }
links.forEach(link => {
    link.addEventListener('click', function() {
        toggleSidebarLinks(this);
    });
});
/////////////////////////////////////////////////////

function createDate(){
const now = new Date();
const options = {
day:'numeric',
month:'numeric',
year:'numeric',
hour:'numeric',
minute:'numeric',
second:'numeric',
}
const dateTime = new Intl.DateTimeFormat(navigator.language, options).format(now)
document.querySelector('.display__date').textContent = dateTime
}
setInterval(() => createDate());