 var sideBarIsOpen = true;

     toggleBtn.addEventListener( 'click', (event) => {
          event.preventDefault();

          if(sideBarIsOpen){
               dashboardsidebar.style.width = '10%';
               dashboardsidebar.style.transition = '0.3s all';
               dashboardContentContainer.style.width = '90%';
               dashboardlogo.style.fontSize = '60px';
               userImage.style.width = '60px';

               menuIcons = document.getElementdByClassName('menuIcons');
               for(var i=0; i < menuIcons.length;i++){
               menuIcons[i].style.display = 'none';
          }

               document.getElementsByClassName('dashboardMenuLists')[0].style.textAlign = 'center';
               sideBarIsOpen = false;
          } else {

               dashboardsidebar.style.width = '20%';
               dashboardContentContainer.style.width = '80%';
               dashboardlogo.style.fontSize = '80px';
               userImage.style.width = '80px';

               menuIcons = document.getElementdByClassName('menuIcons');
               for(var i=0; i < menuIcons.length;i++){
               menuIcons[i].style.display = 'inline-block';
          }
               document.getElementsByClassName('dashboardMenuLists')[0].style.textAlign = 'left';
               sideBarIsOpen = true
          }

     });