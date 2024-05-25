const menuItems  = document.querySelectorAll('.menu-item');

//los mensajes
const messagesNotifications = document.querySelector('#messages-notifications');
const messages = document.querySelector('.messages');
const message = messages.querySelectorAll('.message');
const messageSearch = document.querySelector('#message-search');

//activa la clase de todos los items del menu de la barra izquierda
const changeActiveItem = () =>{
    menuItems.forEach(item => {
       item.classList.remove('active');
    })
}
// y esto que al activarse uno se desactive otro, ade mas de mostrar las notificaciones 
menuItems.forEach(item => {
    item.addEventListener('click', ()=>{
        changeActiveItem();
        item.classList.add('active');
        if (item.id != 'notifications'){
            document.querySelector('.notifications-popup').
            style.display = 'none';
        }else{
            document.querySelector('.notifications-popup').
            style.display = 'block';
            document.querySelector('#notifications . notification-count').style.display ='none';
        }
    })
})
   
const searchMessage = () => {
    const val = messageSearch.value.toLowerCase();
    message.forEach(user => {
        let name = user.querySelector('h5').textContent.toLowerCase();
        if (name.indexOf(val) != -1) {
            user.style.display = 'flex';
        }else{
            user.style.display = 'none';
        }
    })
}

// Mesajes que estan en la barra lateral derecha
messageSearch.addEventListener('keyup', searchMessage);


messagesNotifications.addEventListener('click', () =>{
    messages.style.boxShadow = '0 0 1rem var(--color-primary)';
    messagesNotifications.querySelector('.notification-count').style.display ='none';
    setTime(() => {
        messages.style.boxShadow = 'none';
    }, 2000);
}) 
