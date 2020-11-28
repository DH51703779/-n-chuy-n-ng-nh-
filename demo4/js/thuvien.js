(function($) {
    // Hàm này chỉ chịu trách nhiệm về chức năng của băng chuyền mỗi khi nó được gọi
     // Nói cách khác, chỉ một biểu đồ băng chuyền sẽ được tạo và phạm vi của hàm này chỉ có thể được gán cho một biểu đồ băng chuyền
     // Bắt buộc phải chuyển nhãn gốc của băng chuyền hiện tại khi gọi hàm này
     // Tham số ele ở đây là nhãn gốc của một băng chuyền nhất định
    var slide = function(ele,options) {
        var $ele = $(ele);
        // Tùy chọn cài đặt mặc định
        var setting = {
        		// Kiểm soát thời gian hoạt ảnh của băng chuyền
            speed: 1000,
            // Kiểm soát khoảng thời gian (tốc độ băng chuyền)
            interval: 2000,
            
        };
        // Hợp nhất đối tượng
        $.extend(true, setting, options);
        // Quy định vị trí và trạng thái của mỗi bức tranh
        var states = [
            { $zIndex: 1, width: 160, height: 180, top: 69, left: 134, $opacity: 0.2 },
            { $zIndex: 2, width: 170, height: 210, top: 59, left: 0, $opacity: 0.4 },
            { $zIndex: 3, width: 210, height: 258, top: 35, left: 110, $opacity: 0.7 },
            { $zIndex: 4, width: 500, height: 328, top: 0, left: 263, $opacity: 1 },
            { $zIndex: 3, width: 210, height: 258, top: 35, left: 470, $opacity: 0.7 },
            { $zIndex: 2, width: 170, height: 210, top: 59, left: 620, $opacity: 0.4 },
            { $zIndex: 1, width: 160, height: 180, top: 69, left: 500, $opacity: 0.2 }
        ];

        var $lis = $ele.find('.classa');
        var timer = null;

        // biến 
        $ele.find('.hi-next').on('click', function() {
            next();
        });
        $ele.find('.hi-prev').on('click', function() {
            states.push(states.shift());
            move();
        });
        $ele.on('mouseenter', function() {
            clearInterval(timer);
            timer = null;
        }).on('mouseleave', function() {
            autoPlay();
        });

        move();
        autoPlay();

     // Để mỗi li tương ứng với mỗi trạng thái của các trạng thái trên
         // Cho li mở rộng ở giữa
        function move() {
            $lis.each(function(index, element) {
                var state = states[index];
                $(element).css('zIndex', state.$zIndex).finish().animate(state, setting.speed).find('img').css('opacity', state.$opacity);
            });
        }

        // chuyển sang hình tiếp theo
        function next() {
 // Nguyên tắc: Chuyển phần tử cuối cùng của mảng lên phần tử đầu tiên
            states.unshift(states.pop());
            move();
        }

        function autoPlay() {
            timer = setInterval(next, setting.interval);
        }
    }
    // Tìm nhãn gốc của ảnh băng chuyền thành băng chuyền, gọi slide ()
    $.fn.hiSlide = function(options) {
        $(this).each(function(index, ele) {
            slide(ele,options);
        });
   // trả về giá trị cho lệnh gọi chuỗi hỗ trợ
        return this;
    }
})(jQuery);
