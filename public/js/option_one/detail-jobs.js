
// var navTabs = document.querySelectorAll('.nav-tabs');

// navTabs.forEach(function(navTab) {
//   navTab.addEventListener('click', function(event) {
//     // Kiểm tra xem phần tử được click có class 'nav-item' không
//     if (event.target.classList.contains('nav-item')) {
//       // Lấy tất cả các thẻ con của cha (parent)
//       var tabItems = this.children;

//       // Lặp qua từng thẻ con và xóa class 'active' nếu có
//       for (var i = 0; i < tabItems.length; i++) {
//         tabItems[i].classList.remove('active');
//       }

//       // Thêm class 'active' cho thẻ con được click
//       event.target.classList.add('active');
//     }
//   });
// });
var navTabs = document.querySelectorAll('.nav-tabs');

navTabs.forEach(function(navTab) {
  navTab.addEventListener('click', function(event) {
    if (event.target.classList.contains('nav-item')) {
      // Lấy index của tab được click
      var tabIndex = Array.from(this.children).indexOf(event.target);

      // Lấy tất cả các tab content
      var tabContents = document.querySelectorAll('.tab-content');

      // Lặp qua từng tab content và ẩn tất cả chúng
      tabContents.forEach(function(tabContent) {
        tabContent.style.display = 'none';
      });

      // Hiển thị tab content tương ứng với tab được click
      tabContents[tabIndex].style.display = 'block';

      // Xóa class 'active' khỏi tất cả các tab
      Array.from(this.children).forEach(function(tabItem) {
        tabItem.classList.remove('active');
      });

      // Thêm class 'active' cho tab được click
      event.target.classList.add('active');
    }
  });
});

