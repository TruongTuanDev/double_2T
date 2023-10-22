var navItems = document.querySelectorAll('.nav-item');

  navItems.forEach(function(navItem) {
    navItem.addEventListener('click', function() {
      navItems.forEach(function(item) {
        item.classList.remove('active1');
      });

      this.classList.add('active1');
    });
  });
