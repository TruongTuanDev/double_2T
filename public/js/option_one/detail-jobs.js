var navTabs = document.querySelectorAll('.nav-tabs');

navTabs.forEach(function(navTab) {
  navTab.addEventListener('click', function(event) {
    // Kiểm tra xem phần tử được click có class 'nav-item' không
    if (event.target.classList.contains('nav-item')) {
      // Lấy tất cả các thẻ con của cha (parent)
      var tabItems = this.children;

      // Lặp qua từng thẻ con và xóa class 'active' nếu có
      for (var i = 0; i < tabItems.length; i++) {
        tabItems[i].classList.remove('active');
      }

      // Thêm class 'active' cho thẻ con được click
      event.target.classList.add('active');
    }
  });
});