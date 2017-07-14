<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            ['product_name' => 'Hệ Thống chặn spam mail','customer_id' => 1, 'product_picture' => 'rsz_product1.jpg', 'product_description' => 'Spam là một trong những thách thức lớn nhất hiện nay mà khách hàng và nhà cung cấp dịch vụ phải đối phó. Bài viết này trình bày các đặc điểm, cách phát tán của spam và các phương pháp lọc, phòng chống.
SPAM là một trong những thách thức lớn nhất hiện nay mà khách hàng và các nhà cung cấp dịch vụ phải đối phó. Spam đã trở thành một hình thức quảng cáo chuyên nghiệp, phát tán virus, ăn cắp thông tin... với nhiều thủ đoạn và mánh khóe cực kỳ tinh vi. Người dùng sẽ phải mất khá nhiều thời gian để xóa những email “không mời mà đến”, nếu vô ý còn có thể bị nhiễm virus, trojan, spyware ... và nặng nề hơn là mất thông tin như thẻ tín dụng, tài khoản ngân hàng qua các email dạng phishing. Phần một của bài viết này sẽ trình bày về đặc điểm của spam, cách phát tán và tác hại của spam. Phần hai của bài viết sẽ trình bày về các phương pháp lọc spam và cách phòng chống.

Spam (hay spam email) là thư điện tử quảng cáo hay là thư được gửi mà không có sự yêu cầu từ người nhận. Spam thường là những email vô hại và được gửi tới một số lượng lớn người nhận khác nhau. Spam được gửi với số lượng lớn có thể làm đầy hòm thư của người nhận, nên họ không nhận được các thư mới. Ngoài ra spam còn chiếm dụng băng thông, có thể gây tắc nghẽn đường truyền. Một số loại spam còn chứa nội dung lừa đảo, nhằm mục đích lừa người dùng cung cấp các thông tin cá nhân như mã số thẻ tín dụng, mật khẩu...

Để tiến hành gửi spam, người gửi (spammer) cần phải có một số lượng lớn các địa chỉ email người nhận, danh sách có thể lên đến hàng triệu. Các địa chỉ email có thể được thu thập bằng nhiều cách như: sử dụng các chương trình tự động tìm các địa chỉ email trên Internet, tấn công vào các diễn đàn để lấy trộm cơ sở dữ liệu về các thành viên, dùng phương pháp tấn công kiểu từ điển, dùng các tên thông dụng (ví dụ John, Smith, Steve,...) ghép với hàng ngàn tên miền khác nhau thành các địa chỉ đúng và có xác suất thành công rất cao. 

Spam có đặc điểm là không tốn nhiều chi phí khi gửi đến một số lượng người nhận lớn, vì thế các spammer không cần sàng lọc các đối tượng nhận thư được gửi trùng lặp nhiều lần tới cùng một địa chỉ người nhận.

Hệ thống là một ứng dụng cho phép bạn cấu hình lọc spam để ngăn chặn những email không mong muốn. Nó giúp bạn hạn chế tối đa số spam bằng cách tạo bộ lọc, tạo danh sách đến... ngăn chặn các thư nghi là spam, nghi chứa virut. Chương trình còn cho phép bạn gửi email hàng loại tới một danh sách các địa chỉ mail khác nhau. Ngoài ra, bạn có thể chỉnh sửa, hiển thị bản đính kèm, mã hóa SSL... trong các email gửi đi hoặc gửi đến.'],
            ['product_name' => 'Website Đại Học Hà Nội','customer_id' => 2, 'product_picture' => 'rsz_product2.jpg', 'product_description' => 'Thiết kế web trường học cần thể hiện tốt nhất các nhân tố sau:
•	Màu sắc tươi sáng, vui tươi, năng động và trẻ trung.
•	Hình ảnh đẹp, tươi sáng, hồn nhiên và mang tính giáo dục.
•	Nội dung website phải cô đọng, súc tích và giàu biểu cảm.
•	Giao diện web cần phải cân đối, bố trí hài hòa nhằm nêu bật được những điểm nhấn đồng thời cho khách truy cập có thể nhận biết nội dung tổng thể của website.
•	Thông tin được cập nhật nhanh bằng hệ thống tin tự động cập nhật từ các báo điện tử lớn chính thống.
•	Website phải được tìm kiếm ngay đầu tiên trên google.com.vn với những từ khóa chính của trang web cũng như những chủ đề quan trọng của web.
•	Cấu trúc link thân thiện giúp người đọc dễ dàng tìm đến những nội dung cần thiết và dễ dàng quay lại trang chủ nếu cần.
•	Hệ thống quản trị web thân thiện, dễ sử dụng, 100% ngôn ngữ thể hiện là tiếng Việt giúp người quản trị website nhàn nhã hơn khi cập nhật, chỉnh sửa bài viết, hình ảnh.
•	Tích hợp đầy đủ các tính năng cần thiết nhất mà một website giáo dục cần: Thông tin, dịch vụ, gallery, liên hệ,…
Chúng tôi đã xây dựng nhiều website chuyên nghiệp về giáo dục, đào tạo cho các trường học và tổ chức giáo dục một cách chuyên nghiệp và hiệu quả, được khách hàng đánh giá cao

Gioi thiệu các chức năng:
1	Quản lý thành viên	Module quản lý các thành viên hoạt động trên site. Mục đích chính của module này là giúp người quản trị có thể khởi tạo, phân quyền khu vực hoạt động của các member. Các quyền hạn được phân chia thành 2 mục
1.	Nơi Truy Cập: Thành viên có quyền xem các chuyên mục yêu cầu phải đăng nhập trên site không. Như phần văn phòng – Lưu trữ các thông báo, thông tin đến nhóm nhân viên thuộc văn phòng. Phần tra cứu học sinh – Chỉ những member nào được phân quyền hạn truy cập vào mục này mới có quyền tra cứu
2.	Chức năng hoạt động: Post bài – Member được phân quyền hạn này mới có quyền tham gia post bài lên trang.
Thành viên hoạt động trên trang đồng thời cũng là thành viên của diễn đàn, tuy nhiên đối với diễn đàn có thể đăng ký tìa khoản để tham gia. Đối với những tài khoản đăng ký thông qua diễn đàn sẽ không có tác dụng trên trang chủ. Chỉ những member được admin trực tiếp phân quyền trong quản trị mới được tham gia post bài và truy cập vào những mục có phân quyền trên trang chủ
2	Giới thiệu	Bài viết giới thiệu – Quản lý các bài viết giới thiệu về phòng giáo dục. Số lượng bài viết là tùy í, có thể chỉnh sửa dễ dàng trong panel quản trị
Gallery ảnh – Nơi đăng tải những hình ảnh về hoạt động hoặc mang tính chất giới thiệu về phòng GD&DT. Được thể hiện dưới dạng gallery, dễ dàng quản trị, mang tính thẩm mỹ cao.
3	Tin Tức	Quản lý các vấn đề về tin tức, bao gồm
1.	Phân cấp tin – Tạo, chỉnh sửa các nhóm tin
2.	Di chuyển bài viết, nhóm tin, sắp xếp thứ tự hiển thị tin trên trang – Các bài viết hay nhóm tin có thể di chuyển dễ dàng từ chuyên mục này sang chuyên mục khác. Ngoài ra, người quản trị còn có khả năng chỉnh sửa, cập nhật nội dung cho chúng, sắp xếp thứ tự hiển thị tin trên trang theo số thứ tự được gán cho mỗi tin, nhóm tin cụ thể.
3.	Bài viết – chỉnh sửa, khởi tạo, sắp xếp các bài viết vào từng chuyên mục cụ thể.
4	Tài Nguyên	Quản lý các tài nguyên được đăng tải trên trang
1.	Khởi tạo, chỉnh sửa thông tin mô tả
2.	Chuyển nội dung, gán sang member post khác nhau
3.	Khởi tạo, chỉnh sửa thông tin nhóm tài nguyên
4.	Tích hợp hệ thống tìm kiếm, lọc dữ liệu, thông tin về tài nguyên
5	Thông Tin Trường	Quản lý các thông tin về trường học trên địa bàn, là nơi chỉnh sửa, khởi tạo thông tin về các trường. Nội dung thông tin về trường hiển thị trên trang chủ sẽ được xử lý tại đây.
6	Liên Kết	Quản lý thông tin về các hình ảnh liên kết và link của chúng. Kích thước hình ảnh sẽ được thế kế theo chuẩn thế giới, hỗ trợ nhiều định dạng ảnh ( jpg, jpeg, png, gif, swf … ) giúp tiện lợi và tùy biến dễ dàng khi upload banner.
7	Video	Cập nhật video hiển trị trên trang chủ.
8	Quảng Cáo	Quản lý các hình ảnh quảng cáo trên trang. Kích thước các quảng cáo sẽ được thiết kế theo chuẩn thế giới, Trong mục này, người quản trị chỉ việc cập nhật hình ảnh quảng cáo lên trang. Đối với quảng cáo, hệ thống website được xây dựng sẽ hỗ trợ hầu hết phần lớn các chuẩn định dạng về hình ảnh ( jpg, jpeg, png, gif, swf … )
10	Liên Hệ	Quản lý các thông tin liên hệ được người truy cập gửi qua form liên hệ trên trang chủ. Mội thông tin gửi qua form này sẽ được hiển thị tại đây'],
            ['product_name' => 'Viện Công Nghệ Giáo Dục', 'customer_id' => 3, 'product_picture' => 'rsz_product3.jpg', 'product_description' => 'Thiết kế web trường học cần thể hiện tốt nhất các nhân tố sau:
•	Màu sắc tươi sáng, vui tươi, năng động và trẻ trung.
•	Hình ảnh đẹp, tươi sáng, hồn nhiên và mang tính giáo dục.
•	Nội dung website phải cô đọng, súc tích và giàu biểu cảm.
•	Giao diện web cần phải cân đối, bố trí hài hòa nhằm nêu bật được những điểm nhấn đồng thời cho khách truy cập có thể nhận biết nội dung tổng thể của website.
•	Thông tin được cập nhật nhanh bằng hệ thống tin tự động cập nhật từ các báo điện tử lớn chính thống.
•	Website phải được tìm kiếm ngay đầu tiên trên google.com.vn với những từ khóa chính của trang web cũng như những chủ đề quan trọng của web.
•	Cấu trúc link thân thiện giúp người đọc dễ dàng tìm đến những nội dung cần thiết và dễ dàng quay lại trang chủ nếu cần.
•	Hệ thống quản trị web thân thiện, dễ sử dụng, 100% ngôn ngữ thể hiện là tiếng Việt giúp người quản trị website nhàn nhã hơn khi cập nhật, chỉnh sửa bài viết, hình ảnh.
•	Tích hợp đầy đủ các tính năng cần thiết nhất mà một website giáo dục cần: Thông tin, dịch vụ, gallery, liên hệ,…
Chúng tôi đã xây dựng nhiều website chuyên nghiệp về giáo dục, đào tạo cho các trường học và tổ chức giáo dục một cách chuyên nghiệp và hiệu quả, được khách hàng đánh giá cao

Gioi thiệu các chức năng:
1	Quản lý thành viên	Module quản lý các thành viên hoạt động trên site. Mục đích chính của module này là giúp người quản trị có thể khởi tạo, phân quyền khu vực hoạt động của các member. Các quyền hạn được phân chia thành 2 mục
1.	Nơi Truy Cập: Thành viên có quyền xem các chuyên mục yêu cầu phải đăng nhập trên site không. Như phần văn phòng – Lưu trữ các thông báo, thông tin đến nhóm nhân viên thuộc văn phòng. Phần tra cứu học sinh – Chỉ những member nào được phân quyền hạn truy cập vào mục này mới có quyền tra cứu
2.	Chức năng hoạt động: Post bài – Member được phân quyền hạn này mới có quyền tham gia post bài lên trang.
Thành viên hoạt động trên trang đồng thời cũng là thành viên của diễn đàn, tuy nhiên đối với diễn đàn có thể đăng ký tìa khoản để tham gia. Đối với những tài khoản đăng ký thông qua diễn đàn sẽ không có tác dụng trên trang chủ. Chỉ những member được admin trực tiếp phân quyền trong quản trị mới được tham gia post bài và truy cập vào những mục có phân quyền trên trang chủ
2	Giới thiệu	Bài viết giới thiệu – Quản lý các bài viết giới thiệu về phòng giáo dục. Số lượng bài viết là tùy í, có thể chỉnh sửa dễ dàng trong panel quản trị
Gallery ảnh – Nơi đăng tải những hình ảnh về hoạt động hoặc mang tính chất giới thiệu về phòng GD&DT. Được thể hiện dưới dạng gallery, dễ dàng quản trị, mang tính thẩm mỹ cao.
3	Tin Tức	Quản lý các vấn đề về tin tức, bao gồm
1.	Phân cấp tin – Tạo, chỉnh sửa các nhóm tin
2.	Di chuyển bài viết, nhóm tin, sắp xếp thứ tự hiển thị tin trên trang – Các bài viết hay nhóm tin có thể di chuyển dễ dàng từ chuyên mục này sang chuyên mục khác. Ngoài ra, người quản trị còn có khả năng chỉnh sửa, cập nhật nội dung cho chúng, sắp xếp thứ tự hiển thị tin trên trang theo số thứ tự được gán cho mỗi tin, nhóm tin cụ thể.
3.	Bài viết – chỉnh sửa, khởi tạo, sắp xếp các bài viết vào từng chuyên mục cụ thể.
4	Tài Nguyên	Quản lý các tài nguyên được đăng tải trên trang
1.	Khởi tạo, chỉnh sửa thông tin mô tả
2.	Chuyển nội dung, gán sang member post khác nhau
3.	Khởi tạo, chỉnh sửa thông tin nhóm tài nguyên
4.	Tích hợp hệ thống tìm kiếm, lọc dữ liệu, thông tin về tài nguyên
5	Thông Tin Trường	Quản lý các thông tin về trường học trên địa bàn, là nơi chỉnh sửa, khởi tạo thông tin về các trường. Nội dung thông tin về trường hiển thị trên trang chủ sẽ được xử lý tại đây.
6	Liên Kết	Quản lý thông tin về các hình ảnh liên kết và link của chúng. Kích thước hình ảnh sẽ được thế kế theo chuẩn thế giới, hỗ trợ nhiều định dạng ảnh ( jpg, jpeg, png, gif, swf … ) giúp tiện lợi và tùy biến dễ dàng khi upload banner.
7	Video	Cập nhật video hiển trị trên trang chủ.
8	Quảng Cáo	Quản lý các hình ảnh quảng cáo trên trang. Kích thước các quảng cáo sẽ được thiết kế theo chuẩn thế giới, Trong mục này, người quản trị chỉ việc cập nhật hình ảnh quảng cáo lên trang. Đối với quảng cáo, hệ thống website được xây dựng sẽ hỗ trợ hầu hết phần lớn các chuẩn định dạng về hình ảnh ( jpg, jpeg, png, gif, swf … )
10	Liên Hệ	Quản lý các thông tin liên hệ được người truy cập gửi qua form liên hệ trên trang chủ. Mội thông tin gửi qua form này sẽ được hiển thị tại đây'],
            ['product_name' => 'Hệ Thống Website Du Lịch Becker Travel', 'customer_id' => 4, 'product_picture' => 'rsz_product4.jpg', 'product_description' => 'Với hơn nhiều năm kinh nghiệm Thiết kế các Website Du Lịch lớn và nhỏ trong và ngoài nước. Chúng tôi - OneOffice tự hàng mang đến bạn dịch vụ thiết kế web du lịch hàng đầu với rất nhiều tính năng chuyên biệt của ngành du lịch,
Thật dễ dàng, tiện lợi biết bao khi bạn muốn di du lịch và chỉ cần ở nhà cũng có thể tìm thấy các thông tin về chuyến du lịch mà bạn mong muốn cũng như đặt chỗ ngay tại nhà. Mọi thao tác trên đều có thể thực hiện qua 1 website.
 
Vì thế nếu bạn đang kinh doanh về lĩnh vực Du lịch - Travel thì hãy đừng chần chờ mà trang bị cho mình một website chuyên nghiệp về hình thức lẩn tính năng. Chúng tôi OneOffice ở đây để cung cấp cho bạn dịch vụ thiết kế website Du lịch tốt nhất.
 
Các Chức Năng  gói Thiết kế Website Du lịch
 
TRANG CHỦ
 Trình bày trang nhã, đơn giản, thân thiện
 Màu sắc theo tone màu của Khách hàng yêu cầu hoặc theo màu logo của công ty Du Lịch - Travel.
 Thanh menu chính của website Du Lịch - Travel.
 Nội dung hiển thị chủ yếu: hình ảnh & nội dung giới thiệu về công ty Du Lịch - Travel.
 Có banner đổi hình làm bằng hiệu ứng Flash / JavaScript chuyển động nhẹ nhàng.
 Quản Trị Web quản lý Các module nội dung và menu chính có thể tắt mở hặc thay đổi tên menu linh hoạt qua hệ quản trị.

GIỚI THIỆU CÔNG TY DU LỊCH - TRAVEL

 Nội dung giới thiệu về Công ty Du Lịch - Travel như:
 Giới thiệu chung về công ty Du Lịch - Travel.
 Năng lực, đội ngũ nhân sự.
 Nội dung hiển thị dạng bài viết, có thể chèn hình ảnh minh họa.
 Không giới hạn các phân mục.
 Quản trị có thể thêm, bớt, xóa, sửa các nội dung bài viết và hình ảnh.

GIỚI THIỆU TOUR - CHƯƠNG TRÌNH TOUR

Nội dung giới thiệu và trình bày thông tin các tour Du Lịch - Travel theo các phân mục như:
 Nhóm Tour Du lịch - Traverl Nội địa
 Nhóm Tour Du Lịch - Travel Quốc tế
 Tự thiết kế Tour Du Lịch - Travel
 Nhóm Tour Du Lịch - Travel n
 Nhóm tour con 1
 Nhóm tour con 2
 ...
 Nhóm tour con n
Nội dung hiển thị dạng bài viết, có thể chèn hình ảnh minh họa.

Yêu cầu nâng cao:
 Cho phép khách vào xem website được phép ghi comment trong trang chi tiết của mỗi chương trình tour.
Quản trị có thể xóa, sửa đổi, quản lý và duyệt lại các comment trước khi cho đăng lên website.
Quản trị có thể thêm, bớt, xóa, sửa các nội dung bài viết và hình ảnh.

ĐẶT TOUR DU LỊCH - TRAVEL

 Đặt Tour qua Form đặt tour được thiết kế sẵn:
 Cho phép khách hàng đặt Tour trực tuyến.
 Không cần đăng nhập tài khoản.
 Khách hàng đặt Tour Du Lịch - Travel qua Form đặt tour với các ô thông tin được thiết lập sẵn như: Họ tên, số điện thoại, email, số người, ngày đi, ngày về, số phòng, điểm đến ...
 Thông tin, yêu cầu đặt tour được gửi về email của quản trị viên.
 Quản trị viên sau khi nhận được thông tin sẽ liên hệ với KH để xác nhận yêu cầu.

DỊCH VỤ
Hiển thị các thông tin dịch vụ của công ty Du Lịch - Travel, có thể chia thành nhiều phân mục như:

 Đặt mua vé máy bay, xe
 Đặt phòng khách sạn
 Thiết kế tour công ty
 Nhóm dịch vụ thứ n
 Nội dung hiển thị dạng bài viết, có thể chèn hình ảnh minh họa.
 Quản trị có thể thêm, bớt, xóa, sửa các nội dung bài viết và hình ảnh.

TIN TỨC
Hiển thị các tin tức liên quan đến Du Lịch - Travel hoặc tin tức nội bộ của công ty :

 Tin tức về Du Lịch - Travel
 Tin Khuyến mãi
 Tin Tuyển dụng
 .....
 Nội dung hiển thị dạng bài viết, có thể chèn hình ảnh minh họa.
 Quản trị có thể thêm, bớt, xóa, sửa các nội dung bài viết và hình ảnh.

TƯ VẤN - HỎI ĐÁP

Người dùng có thể đặt câu hỏi về Du Lịch - Travel.
Câu hỏi gửi về email của quản trị viên.
Hiển thị các câu hỏi thường gặp dạng FAQs.
 Quản trị có thễ thêm, bớt, xóa, sửa các câu hỏi thường gặp.

LIÊN HỆ

 cấp 1 mẫu biểu trực tuyến cho phép khách hàng có thể gửi các yêu cầu, nhân xét cùa mình đến công ty.
 Mẫu form bao gồm các thông tin: Họ tên, email, tiêu đề, nội dung liên hệ.
 Thông tin sẽ được gửi đến email của Quản trị viên.
 Quản trị có thễ thay đổi thông tin liên hệ.

CÁC TIỆN ÍCH KHÁC

a.Cung cấp tài khoản miễn phí để sử dụng bộ thống kê chi tiết KH tự quản lý tài khoản


b.Đặt banner quảng cáo, liên kết website:

Có thể đặt các banner quảng cáo, logo đối tác, link liên kết tại các vị trí module đã có sẵn trên website Quản trị có thể thêm, bớt, xóa các banner.


c.Giới thiệu qua email:

Khách hàng có thể gửi trang đang xem cho bạn bè qua email 


d.Hỗ Trợ trực tuyến:

- Yahoo
- Skype Quản trị có thể thay đổi nick Yahoo và Skype


e.Tỉ giá: lấy nguồn từ ngân hàng Vietcombank

- Tỉ giá vàng
- Tỉ giá ngoại tệ 


f.Thăm dò thị hiếu: 

- Với chức năng bỏ phiếu bầu chọn
- Người dùng chọn câu trả lời, hệ thống sẽ thống kê ý kiến. Quản trị đặt câu hỏi và câu trả lời trong quản trị


g.Thống kê truy cập:

- Số người truy cập website
- Số khách đang online. Quản trị có thể reset lại khi cần thiết


h.Tìm kiếm:

- Tìm kiếm theo từ khóa có liên quan
- Tìm kiếm nâng cao:
Tìm theo điểm đến, điểm đi
Tìm theo giá tour
Tìm theo các tiêu chí khác


i.Công nghệ thiết kế Website Nhà Hàng cần biết:

- Ngôn ngữ: Tiếng Anh, Tiếng Việt hoặc nhiều hơn nữa.
- Hosting: Windows
- Photoshop, Flash, Dreamweaver, CSS, ... - Asp.Net MVC 5
- HTML5, CSS3, Jquery
- Bootstrap Responsive
- Sql Server 2012
- Entity Framework 6
- SEO Google
- Facebook Panpage
- Google +, Twitter'],
            ['product_name' => 'Công Ty Viễn Thông GTEL', 'customer_id' => 5, 'product_picture' => 'rsz_product5.jpg', 'product_description' => 'Công ty Cổ phần Viễn Thông Di Động Toàn Cầu (Gtel Mobile JSC.) được thành lập ngày 8/7/2008, dưới hình thức một công ty liên doanh giữa hai cổ đông - Tổng Công ty viễn thông Toàn cầu (GTel Corp) và Tập đoàn VimpelCom (Liên bang Nga). Do thay đổi trong chiến lược kinh doanh theo thỏa thuận của các cổ đông, đồng thời được sự phê duyệt của Chính Phủ cũng như các Cơ quan trung ương, tháng 4/2012, phía Vimpelcom  đã chuyển giao toàn bộ cổ phần của mình trong liên doanh cho phía Việt Nam, qua đó đưa GTel Mobile JSC chính thức trở thành doanh nghiệp viễn thông 100% vốn trong nước, bước sang một giai đoạn mới phát triển trên thị trường viễn thông Việt Nam.
GTel Mobile JSC là nhà cung cấp và khai thác các dịch vụ viễn thông di động trên nền tảng công nghệ GSM/EDGE. Để triển khai hệ thống mạng viễn thông di động của mình, GTEL Mobile JSC đã và đang hợp tác với rất nhiều tập đoàn viễn thông hàng đầu thế giới như  Alcatel Lucent, Ericsson, Huawei, Comverse, IBM, ..qua đó xây dựng được các hệ thống thiết bị mạng của Công ty thuộc hàng tiên tiến nhất trên thế giới.
Cho đến tháng 8/2012, GTel Mobile JSC khai thác và sử dụng thương hiệu BeelineVN tại thị trường viễn thông Việt Nam. Tháng 9/2012, GTel Mobile JSC công bố và chính thức tái cung cấp dịch vụ dưới thương hiệu mới Gmobile thay thế cho thương hiệu BeelineVN  
Đồng hành với thương hiệu mới Gmobile là khẩu hiệu “Nghĩ mới – Làm mới”.
 I. Mô tả công việc vị trí Nhân viên quản trị website
Nhiệm vụ/trách nhiệm của Nhân viên quản trị website bao gồm:
1. Quản trị, vận hành website của công ty
+ Cập nhật thông tin và bảo trì website, đảm bảo tính ổn định kỹ thuật và chất lượng thông tin: Đăng bài, thay đổi liên tục, đảm bảo những công cụ như mua bán trên mạng hoạt động tốt.
+ Tối ưu hóa website (SEO, Google Adwords). Phân tích và đánh giá về thị trường thông qua các từ khóa yêu cầu.
+ Thiết kế các banner, logo, poster … theo sự chỉ định của phụ trách bộ phận
2. Xây dựng cách thức phù hợp để tiếp cận và quản lý cộng đồng trên các kênh social media: Facebook, Twitter, Google plus, Yahoo, Zingme, diễn đàn…
3. Tạo ra các chương trình thu hút thành viên, những người tham gia: Viết bài lên các diễn đàn, blog, các mạng xã hội nhằm quảng bá dịch vụ, sản phẩm của công ty.
4. Các công việc khác: Lập và triển khai thực hiện các chương trình, kế hoạch marketing online; Hỗ trợ thực hiện các hoạt động nghiên cứu thị trường, triển khai kế hoạch, chiến lược kinh doanh; Hỗ trợ sửa chữa hệ thống trang thiết bị văn phòng và thực hiện các công việc liên quan khác theo sự phân công của Người quản lý.
5. Lập kế hoạch quảng bá website.
6. Tìm hiểu và đánh giá từ khóa trong lĩnh vực liên quan.
7. Đẩy các từ khóa lên trang đầu của công cụ tìm kiếm.Thực hiện các công việc về kết nối với cộng đồng webmaster.
Dựa trên các nhiệm vụ trên, bạn có thể xây dựng bảng nhiệm vụ chi tiết hàng ngày, hàng tuần, quy trình và hướng dẫn làm việc. Bản mô tả công việc chuẩn cần trích dẫn, phụ thuộc vào bản chức năng nhiệm vụ của phòng ban liên quan.
Tham khảo thêm: 12 mẹo để viết bảng mô tả công việc: http://nghenghiep123.com/12-meo-de-viet-bang-mo-ta-cong-viec
II. Tiêu chuẩn công việc Nhân viên quản trị website
Tiêu chuẩn công việc của Nhân viên quản trị website bao gồm: bằng cấp, đào tạo, kiến thức, kinh nghiệm, kỹ năng, tố chất sau đây:
1. Tốt nghiệp Cao đẳng trở lên chuyên ngành CNTT
2. Có kinh nghiệm tại vị trí tương đương,Trong thiết kế và SEO web, Google Adward
3. Có khả năng đọc, dịch và biên soạn tài liệu tiếng Anh
4. Sức khỏe tốt, ngoại hình tương đối.
5. Có kiến thức chuyên sâu về marketing, thương mại điện tử, nghiên cứu và phát triển thị trường.
6. Am hiểu các phương pháp truyền thông, giới thiệu sản phẩm, khảo sát và thu thập thông tin
7. Sử dụng thành thạo tin học văn phòng (word, excel, powerpoint, thiết kế: photoshop, CorelDraw…)
Có khả năng viết bài và phân tích, tổng hợp thông tin, nhanh nhạy cập nhật các cách tiếp cận mới đối với thị trường, khách hàng'],
            ['product_name' => 'Website Sở GDĐT Cao Bằng', 'customer_id' => 6, 'product_picture' => 'rsz_product6.jpg', 'product_description' => 'Mô tả chi tiết chức năng thiết kế website giáo dục :
– website giáo dục được thiết kế theo các Modul như :
    + Trang chủ
    + Page các khóa học, chương trình đào tạo hoặc page cho các dịch vụ kèm theo
    + Tin tức
    + Giới thiệu và liên hệ
    + Form đăng ký khóa học hay đăng ký nhận thông tin được gửu đến mail của người quản trị
    + Tìm kiếm chi tiết dựa theo các tiêu chí khác nhau như tìm khóa học , chương trình đào tạo , giáo sưthuyết trình …..
    + Đa ngôn ngữ khác trên website
Chi tiết yêu cầu cho các chức năng được thực hiện như sau:
Trang chủ : 
Là trang gây ấn tượng đầu tiên và cảm giác thân thiện với người truy cập Website, bao gồm các nội dung chung nhất .
•	Trình bày đơn giản ấn tượng và thân thiện
•	Màu sắc chủ đạo của Website tùy theo yêu cầu của KH và logo, biểu tượng của doanh nghiệp.
•	Nội dung hiển thị menu chủ yếu như: logo banner,slogan, các chuyên mục cơ bản và menu chính gồm giới thiệu, Khóa học , tin tức, hình ảnh – video, Liên hệ.
Giơí thiệu:
•	Quản lý và cập nhật thông tin giới thiệu về công ty , khóa học cũng như những chương trình liên quan
•	Cho phép xem khóa học, xem chi tiết khóa học
•	Cho phép cập nhật và thay đổi nội dung mô tả khóa học
•	Cho phép chèn hình ảnh minh họa
Tin Tức – Sự Kiện – Video – Hình Ảnh:
•	Thể hiện nội dung hình ảnh các bài viết liên quan đến chương trình học.
•	Nội dung hiển thị dạng bài viết
•	Không giới hạn số mục con, tự động phân trang
•	Không giới hạn bài viết
•	Có các nút chia sẻ trên mạng xã hội
•	Hiển thị ngày đăng bài viết
•	Cho phép comment bằng facebook
•	Hiển thị 5 tin liên quan gần nhất
Khóa Học – Chương Trình đào tạo
•	Không giới hạn các menu con
•	Có thể thêm, sửa, xóa, ẩn menu con
•	Menu thay đổi theo đúng mong muốn
•	Menu Lịch học, Thông báo tuyển sinh: Hiển thị lịch học, thông báo tuyển sinh theo từng khóa. Có phân trang, mỗi trang có hiển thị 10 thông báo tuyển sinh gần nhất, được đánh số tự động. Chỉ hiển thị tiêu đề thông báo tuyển sinh hoặc lịch học. Khi click vào tiêu đề này sẽ chuyển đến, trang bài viết thông báo tuyển sinh chi tiết.
•	Bài viết chi tiết cho khóa học sẽ thể nội dung hình ảnh trực quan có nút ĐĂNG KÝ dưới cuối hoặc đầu bài viết
Form đăng ký:
•	Gồm các trường như: họ tên, địa chỉ,email, số điện thoại
•	Sau khi nhập xong nhấn nút đăng ký sẽ có dòng thông báo “Cảm ơn, chúng tôi sẽ báo lại cho bạn lịch học sớm nhất”
•	Thông tin đăng ký được gửu về mail quản trị với đầy đủ thông tin của ngưoì đăng ký
Phần Quản Trị:
•	Có thể chỉnh sửa, thêm, xóa, đăng bài viết, xem trước nội dung
•	Có đầy đủ các mục hỗ trợ SEO, ô soạn text dễ sử dụng, có thể chèn link, hình ảnh, video,….
•	Cho phép lựa chọn hiển thị 5 tin liên quan gần nhất
Ngoài ra còn các Modul khác như : Phản hồi của học viên, Hỏi đáp thắc mắc offline, Hỏi đáp trực tuyến, bảo mật….
Thiết kế website wordpress phù hợp với trang website chuyên về đào tạo khóa học tại trung tâm như trung tâm tiếng anh, tiếng nhật… hoặc các trường đại học có các chương trình đào tạo ngoài ngành như đào tạo thạc sỹ, tiến sỹ, văn bằng 2….. Với mỗi thiết kế website về giáo dục đều mang một phong cách riêng và độc đáo phù hợp với chương trình đào tạo của trường học hay trung tâm.'],
            ['product_name' => 'Flying SuperKids Đan Mạch', 'customer_id' => 7, 'product_picture' => 'rsz_product7.jpg', 'product_description' => 'Thiết kế web trường học cần thể hiện tốt nhất các nhân tố sau:
•	Màu sắc tươi sáng, vui tươi, năng động và trẻ trung.
•	Hình ảnh đẹp, tươi sáng, hồn nhiên và mang tính giáo dục.
•	Nội dung website phải cô đọng, súc tích và giàu biểu cảm.
•	Giao diện web cần phải cân đối, bố trí hài hòa nhằm nêu bật được những điểm nhấn đồng thời cho khách truy cập có thể nhận biết nội dung tổng thể của website.
•	Thông tin được cập nhật nhanh bằng hệ thống tin tự động cập nhật từ các báo điện tử lớn chính thống.
•	Website phải được tìm kiếm ngay đầu tiên trên google.com.vn với những từ khóa chính của trang web cũng như những chủ đề quan trọng của web.
•	Cấu trúc link thân thiện giúp người đọc dễ dàng tìm đến những nội dung cần thiết và dễ dàng quay lại trang chủ nếu cần.
•	Hệ thống quản trị web thân thiện, dễ sử dụng, 100% ngôn ngữ thể hiện là tiếng Việt giúp người quản trị website nhàn nhã hơn khi cập nhật, chỉnh sửa bài viết, hình ảnh.
•	Tích hợp đầy đủ các tính năng cần thiết nhất mà một website giáo dục cần: Thông tin, dịch vụ, gallery, liên hệ,…
Chúng tôi đã xây dựng nhiều website chuyên nghiệp về giáo dục, đào tạo cho các trường học và tổ chức giáo dục một cách chuyên nghiệp và hiệu quả, được khách hàng đánh giá cao

Gioi thiệu các chức năng:
1	Quản lý thành viên	Module quản lý các thành viên hoạt động trên site. Mục đích chính của module này là giúp người quản trị có thể khởi tạo, phân quyền khu vực hoạt động của các member. Các quyền hạn được phân chia thành 2 mục
1.	Nơi Truy Cập: Thành viên có quyền xem các chuyên mục yêu cầu phải đăng nhập trên site không. Như phần văn phòng – Lưu trữ các thông báo, thông tin đến nhóm nhân viên thuộc văn phòng. Phần tra cứu học sinh – Chỉ những member nào được phân quyền hạn truy cập vào mục này mới có quyền tra cứu
2.	Chức năng hoạt động: Post bài – Member được phân quyền hạn này mới có quyền tham gia post bài lên trang.
Thành viên hoạt động trên trang đồng thời cũng là thành viên của diễn đàn, tuy nhiên đối với diễn đàn có thể đăng ký tìa khoản để tham gia. Đối với những tài khoản đăng ký thông qua diễn đàn sẽ không có tác dụng trên trang chủ. Chỉ những member được admin trực tiếp phân quyền trong quản trị mới được tham gia post bài và truy cập vào những mục có phân quyền trên trang chủ
2	Giới thiệu	Bài viết giới thiệu – Quản lý các bài viết giới thiệu về phòng giáo dục. Số lượng bài viết là tùy í, có thể chỉnh sửa dễ dàng trong panel quản trị
Gallery ảnh – Nơi đăng tải những hình ảnh về hoạt động hoặc mang tính chất giới thiệu về phòng GD&DT. Được thể hiện dưới dạng gallery, dễ dàng quản trị, mang tính thẩm mỹ cao.
3	Tin Tức	Quản lý các vấn đề về tin tức, bao gồm
1.	Phân cấp tin – Tạo, chỉnh sửa các nhóm tin
2.	Di chuyển bài viết, nhóm tin, sắp xếp thứ tự hiển thị tin trên trang – Các bài viết hay nhóm tin có thể di chuyển dễ dàng từ chuyên mục này sang chuyên mục khác. Ngoài ra, người quản trị còn có khả năng chỉnh sửa, cập nhật nội dung cho chúng, sắp xếp thứ tự hiển thị tin trên trang theo số thứ tự được gán cho mỗi tin, nhóm tin cụ thể.
3.	Bài viết – chỉnh sửa, khởi tạo, sắp xếp các bài viết vào từng chuyên mục cụ thể.
4	Tài Nguyên	Quản lý các tài nguyên được đăng tải trên trang
1.	Khởi tạo, chỉnh sửa thông tin mô tả
2.	Chuyển nội dung, gán sang member post khác nhau
3.	Khởi tạo, chỉnh sửa thông tin nhóm tài nguyên
4.	Tích hợp hệ thống tìm kiếm, lọc dữ liệu, thông tin về tài nguyên
5	Thông Tin Trường	Quản lý các thông tin về trường học trên địa bàn, là nơi chỉnh sửa, khởi tạo thông tin về các trường. Nội dung thông tin về trường hiển thị trên trang chủ sẽ được xử lý tại đây.
6	Liên Kết	Quản lý thông tin về các hình ảnh liên kết và link của chúng. Kích thước hình ảnh sẽ được thế kế theo chuẩn thế giới, hỗ trợ nhiều định dạng ảnh ( jpg, jpeg, png, gif, swf … ) giúp tiện lợi và tùy biến dễ dàng khi upload banner.
7	Video	Cập nhật video hiển trị trên trang chủ.
8	Quảng Cáo	Quản lý các hình ảnh quảng cáo trên trang. Kích thước các quảng cáo sẽ được thiết kế theo chuẩn thế giới, Trong mục này, người quản trị chỉ việc cập nhật hình ảnh quảng cáo lên trang. Đối với quảng cáo, hệ thống website được xây dựng sẽ hỗ trợ hầu hết phần lớn các chuẩn định dạng về hình ảnh ( jpg, jpeg, png, gif, swf … )
10	Liên Hệ	Quản lý các thông tin liên hệ được người truy cập gửi qua form liên hệ trên trang chủ. Mội thông tin gửi qua form này sẽ được hiển thị tại đây'],
            ['product_name' => 'Ban Bảo Vệ CSSK Trung Ương Đảng', 'customer_id' => 8, 'product_picture' => 'rsz_product8.jpg', 'product_description' => 'Mô tả chi tiết chức năng thiết kế website giáo dục :
– website giáo dục được thiết kế theo các Modul như :
    + Trang chủ
    + Page các khóa học, chương trình đào tạo hoặc page cho các dịch vụ kèm theo
    + Tin tức
    + Giới thiệu và liên hệ
    + Form đăng ký khóa học hay đăng ký nhận thông tin được gửu đến mail của người quản trị
    + Tìm kiếm chi tiết dựa theo các tiêu chí khác nhau như tìm khóa học , chương trình đào tạo , giáo sưthuyết trình …..
    + Đa ngôn ngữ khác trên website
Chi tiết yêu cầu cho các chức năng được thực hiện như sau:
Trang chủ : 
Là trang gây ấn tượng đầu tiên và cảm giác thân thiện với người truy cập Website, bao gồm các nội dung chung nhất .
•	Trình bày đơn giản ấn tượng và thân thiện
•	Màu sắc chủ đạo của Website tùy theo yêu cầu của KH và logo, biểu tượng của doanh nghiệp.
•	Nội dung hiển thị menu chủ yếu như: logo banner,slogan, các chuyên mục cơ bản và menu chính gồm giới thiệu, Khóa học , tin tức, hình ảnh – video, Liên hệ.
Giơí thiệu:
•	Quản lý và cập nhật thông tin giới thiệu về công ty , khóa học cũng như những chương trình liên quan
•	Cho phép xem khóa học, xem chi tiết khóa học
•	Cho phép cập nhật và thay đổi nội dung mô tả khóa học
•	Cho phép chèn hình ảnh minh họa
Tin Tức – Sự Kiện – Video – Hình Ảnh:
•	Thể hiện nội dung hình ảnh các bài viết liên quan đến chương trình học.
•	Nội dung hiển thị dạng bài viết
•	Không giới hạn số mục con, tự động phân trang
•	Không giới hạn bài viết
•	Có các nút chia sẻ trên mạng xã hội
•	Hiển thị ngày đăng bài viết
•	Cho phép comment bằng facebook
•	Hiển thị 5 tin liên quan gần nhất
Khóa Học – Chương Trình đào tạo
•	Không giới hạn các menu con
•	Có thể thêm, sửa, xóa, ẩn menu con
•	Menu thay đổi theo đúng mong muốn
•	Menu Lịch học, Thông báo tuyển sinh: Hiển thị lịch học, thông báo tuyển sinh theo từng khóa. Có phân trang, mỗi trang có hiển thị 10 thông báo tuyển sinh gần nhất, được đánh số tự động. Chỉ hiển thị tiêu đề thông báo tuyển sinh hoặc lịch học. Khi click vào tiêu đề này sẽ chuyển đến, trang bài viết thông báo tuyển sinh chi tiết.
•	Bài viết chi tiết cho khóa học sẽ thể nội dung hình ảnh trực quan có nút ĐĂNG KÝ dưới cuối hoặc đầu bài viết
Form đăng ký:
•	Gồm các trường như: họ tên, địa chỉ,email, số điện thoại
•	Sau khi nhập xong nhấn nút đăng ký sẽ có dòng thông báo “Cảm ơn, chúng tôi sẽ báo lại cho bạn lịch học sớm nhất”
•	Thông tin đăng ký được gửu về mail quản trị với đầy đủ thông tin của ngưoì đăng ký
Phần Quản Trị:
•	Có thể chỉnh sửa, thêm, xóa, đăng bài viết, xem trước nội dung
•	Có đầy đủ các mục hỗ trợ SEO, ô soạn text dễ sử dụng, có thể chèn link, hình ảnh, video,….
•	Cho phép lựa chọn hiển thị 5 tin liên quan gần nhất
Ngoài ra còn các Modul khác như : Phản hồi của học viên, Hỏi đáp thắc mắc offline, Hỏi đáp trực tuyến, bảo mật….
Thiết kế website wordpress phù hợp với trang website chuyên về đào tạo khóa học tại trung tâm như trung tâm tiếng anh, tiếng nhật… hoặc các trường đại học có các chương trình đào tạo ngoài ngành như đào tạo thạc sỹ, tiến sỹ, văn bằng 2….. Với mỗi thiết kế website về giáo dục đều mang một phong cách riêng và độc đáo phù hợp với chương trình đào tạo của trường học hay trung tâm.'],
            ['product_name' => 'Tập Đoàn Hùng Vương', 'customer_id' => 9, 'product_picture' => 'rsz_product9.jpg', 'product_description' => ' Kinh doanh trực tuyến không còn là điều quá mới mẻ trong khi Internet đã phát triển vượt bậc cả về lượng và chất. Việc thiết kế một website bán hàng là điều kiện cần và đủ để khởi nghiệp trên môi trường “ảo” và cũng không mấy khó khăn để làm một website bán hàng. Nhưng để kinh doanh trực tuyến thành công, bạn cần phải có một website bán hàng thật sự chuyên nghiệp, để vượt qua các đối thủ cạnh tranh!
Chúng tôi với 7 năm kinh nghiệm trong việc thiet ke web ban hang, chúng tôi đảm bảo sẽ mang đến cho bạn một website đẹp, giá rẻ chất lượng tốt nhất.
Các sản phẩm website bán hàng của chúng tôi đều được phát triển dựa trên yêu cầu từ thực tiễn và đáp ứng, giải quyết nhanh chóng các vấn đề của khách hàng về quản trị, điều hành hệ thống cũng như kinh doanh các sản phẩm mà khách hàng mong muốn.
Không chỉ mang lại những giải pháp thiết kế website theo phong cách thiết kế chuyên nghiệp, chúng tôi không ngừng học hỏi, sáng tạo những ý tưởng, luôn đổi mới phong cách phù hợp với quy trình chuẩn hóa quốc tế. Nỗ lực vươn tới vị trí công ty thiết kế website hàng đầu Việt Nam.
Ngày nay, chỉ có rất ít hàng hóa và dịch vụ là không thể bán qua mạng. Hiện có hơn 20 triệu người mua hàng trực tuyến, họ mua tất cả mọi thứ từ sách tới máy vi tính, tới xe hơi, tới bất động sản, tới máy bay phản lực và tới cả khí tự nhiên. Nếu không thể tưởng tượng ra thì ai đó sẽ chỉ cho cách bán hàng hóa qua mạng như thế nào.
Dưới đây là một số lợi ích có thể trông thấy rõ ràng mà việc thiết kế website bán hàng mang đến cho bạn:
•	Cập nhật thông tin sản phẩm, dịch vụ nhanh nhất, chi tiết nhất đến với khách hàng
•	Tiết kiệm chi phí thành lập và duy trì cửa hàng thông qua thiết kế website bán hàng
•	Kết nối mua và bán cho dù bạn đang ở bất cứ đâu
•	Nâng cao khả năng mở rộng quy mô hoạt động cho cửa hàng của bạn
•	Bán hàng chuyên nghiệp mà không bị giới hạn về thời gian và không gian
•	Website bán hàng giúp đo lường, kiểm tra chất lượng kinh doanh tốt hơn
•	Tiết kiệm thời gian
•	Tăng gấp đôi hoặc gấp ba doanh thu nếu như bạn có một website bán hàng chuyên nghiệp
•	Tiếp cận đúng đối tượng cần đến dịch vụ, sản phẩm bạn có
•	Bạn muốn sản phẩm dịch vụ của mình dễ dàng được tìm kiếm và tiếp cận bởi đông đảo khách hàng tiềm năng và khách hàng mới?
•	Bạn muốn tăng doanh số bán hàng mà không tăng chi phí?
•	Khách hàng chưa biết đến thương hiệu của bạn hoặc gặp khó khăn với hệ thống website vô cùng phức tạp và không thân thiện với công cụ tìm kiếm?
•	Bạn chưa có website hay bạn đã xây dựng website bán hàng nhưng không mang lại hiệu quả như mong muốn?
•	Bạn tốn chi phí và thời gian, công sức mà chưa tìm được giải pháp hiệu quả để bạn cụ thể hóa đầu tư thành lợi nhuận?
Việc bán hàng qua mạng có thực sự đơn giản ?
Để có được một trang web bán hàng và thực hiện công việc bán hàng trực tuyến không còn là điều quá khó khăn như mọi người vẫn tưởng. Bán hàng qua mạng ngày càng dễ dàng hơn khi mà có quá nhiều công cụ hỗ trợ cho việc bán hàng, việc của bạn chỉ là ngồi và kiểm tra kết quả doanh thu của bạn.
Các tiêu chí để website bán hàng qua mạng hiệu quả.
•	Sản phẩm có hình ảnh chất lượng, mô tả cụ thể, nổi bật, giá cả phù hợp.
•	Đầy đủ các tính năng hỗ trợ trực tuyến, giỏ hàng, vận chuyển, thanh toán online, liên kết facebook...
•	Thường xuyên update sản phẩm mới, sản phẩm khuyến mại lên trang chủ, update bài viết tư vấn...
•	Các chức năng của website phải trực quan, thao tác đơn giản cho người dùng truy cập website.
•	Có sự tương tác giữa khách hàng và người bán một cách dễ dàng và đơn giản.
Các chức năng chính của website bán hàng.
1. Trang chủ bố trí hợp lý và dễ nhìn
2. Trang giới thiệu công ty, dịch vụ công ty
3. Trang sản phẩm, quản lý sản phẩm
4. Mua hàng, thanh toán đơn hang
5. Tìm kiếm
6. Hỗ trợ bán hàng: yahoo, skype, livechat…vv
7. Trang liên hệ, bản đồ đến công ty
8. Trang tin tức
…..Và một số yêu cầu khác tuỳ vào từng website.'],
            ['product_name' => 'Website Khoa Học Công Nghệ Thông Tin','customer_id' => 10, 'product_picture' => 'rsz_product10.jpg', 'product_description' => 'Thiết kế web trường học cần thể hiện tốt nhất các nhân tố sau:
•	Màu sắc tươi sáng, vui tươi, năng động và trẻ trung.
•	Hình ảnh đẹp, tươi sáng, hồn nhiên và mang tính giáo dục.
•	Nội dung website phải cô đọng, súc tích và giàu biểu cảm.
•	Giao diện web cần phải cân đối, bố trí hài hòa nhằm nêu bật được những điểm nhấn đồng thời cho khách truy cập có thể nhận biết nội dung tổng thể của website.
•	Thông tin được cập nhật nhanh bằng hệ thống tin tự động cập nhật từ các báo điện tử lớn chính thống.
•	Website phải được tìm kiếm ngay đầu tiên trên google.com.vn với những từ khóa chính của trang web cũng như những chủ đề quan trọng của web.
•	Cấu trúc link thân thiện giúp người đọc dễ dàng tìm đến những nội dung cần thiết và dễ dàng quay lại trang chủ nếu cần.
•	Hệ thống quản trị web thân thiện, dễ sử dụng, 100% ngôn ngữ thể hiện là tiếng Việt giúp người quản trị website nhàn nhã hơn khi cập nhật, chỉnh sửa bài viết, hình ảnh.
•	Tích hợp đầy đủ các tính năng cần thiết nhất mà một website giáo dục cần: Thông tin, dịch vụ, gallery, liên hệ,…
Chúng tôi đã xây dựng nhiều website chuyên nghiệp về giáo dục, đào tạo cho các trường học và tổ chức giáo dục một cách chuyên nghiệp và hiệu quả, được khách hàng đánh giá cao

Gioi thiệu các chức năng:
1	Quản lý thành viên	Module quản lý các thành viên hoạt động trên site. Mục đích chính của module này là giúp người quản trị có thể khởi tạo, phân quyền khu vực hoạt động của các member. Các quyền hạn được phân chia thành 2 mục
1.	Nơi Truy Cập: Thành viên có quyền xem các chuyên mục yêu cầu phải đăng nhập trên site không. Như phần văn phòng – Lưu trữ các thông báo, thông tin đến nhóm nhân viên thuộc văn phòng. Phần tra cứu học sinh – Chỉ những member nào được phân quyền hạn truy cập vào mục này mới có quyền tra cứu
2.	Chức năng hoạt động: Post bài – Member được phân quyền hạn này mới có quyền tham gia post bài lên trang.
Thành viên hoạt động trên trang đồng thời cũng là thành viên của diễn đàn, tuy nhiên đối với diễn đàn có thể đăng ký tìa khoản để tham gia. Đối với những tài khoản đăng ký thông qua diễn đàn sẽ không có tác dụng trên trang chủ. Chỉ những member được admin trực tiếp phân quyền trong quản trị mới được tham gia post bài và truy cập vào những mục có phân quyền trên trang chủ
2	Giới thiệu	Bài viết giới thiệu – Quản lý các bài viết giới thiệu về phòng giáo dục. Số lượng bài viết là tùy í, có thể chỉnh sửa dễ dàng trong panel quản trị
Gallery ảnh – Nơi đăng tải những hình ảnh về hoạt động hoặc mang tính chất giới thiệu về phòng GD&DT. Được thể hiện dưới dạng gallery, dễ dàng quản trị, mang tính thẩm mỹ cao.
3	Tin Tức	Quản lý các vấn đề về tin tức, bao gồm
1.	Phân cấp tin – Tạo, chỉnh sửa các nhóm tin
2.	Di chuyển bài viết, nhóm tin, sắp xếp thứ tự hiển thị tin trên trang – Các bài viết hay nhóm tin có thể di chuyển dễ dàng từ chuyên mục này sang chuyên mục khác. Ngoài ra, người quản trị còn có khả năng chỉnh sửa, cập nhật nội dung cho chúng, sắp xếp thứ tự hiển thị tin trên trang theo số thứ tự được gán cho mỗi tin, nhóm tin cụ thể.
3.	Bài viết – chỉnh sửa, khởi tạo, sắp xếp các bài viết vào từng chuyên mục cụ thể.
4	Tài Nguyên	Quản lý các tài nguyên được đăng tải trên trang
1.	Khởi tạo, chỉnh sửa thông tin mô tả
2.	Chuyển nội dung, gán sang member post khác nhau
3.	Khởi tạo, chỉnh sửa thông tin nhóm tài nguyên
4.	Tích hợp hệ thống tìm kiếm, lọc dữ liệu, thông tin về tài nguyên
5	Thông Tin Trường	Quản lý các thông tin về trường học trên địa bàn, là nơi chỉnh sửa, khởi tạo thông tin về các trường. Nội dung thông tin về trường hiển thị trên trang chủ sẽ được xử lý tại đây.
6	Liên Kết	Quản lý thông tin về các hình ảnh liên kết và link của chúng. Kích thước hình ảnh sẽ được thế kế theo chuẩn thế giới, hỗ trợ nhiều định dạng ảnh ( jpg, jpeg, png, gif, swf … ) giúp tiện lợi và tùy biến dễ dàng khi upload banner.
7	Video	Cập nhật video hiển trị trên trang chủ.
8	Quảng Cáo	Quản lý các hình ảnh quảng cáo trên trang. Kích thước các quảng cáo sẽ được thiết kế theo chuẩn thế giới, Trong mục này, người quản trị chỉ việc cập nhật hình ảnh quảng cáo lên trang. Đối với quảng cáo, hệ thống website được xây dựng sẽ hỗ trợ hầu hết phần lớn các chuẩn định dạng về hình ảnh ( jpg, jpeg, png, gif, swf … )
10	Liên Hệ	Quản lý các thông tin liên hệ được người truy cập gửi qua form liên hệ trên trang chủ. Mội thông tin gửi qua form này sẽ được hiển thị tại đây'],
            ['product_name' => 'Hệ Thống Liên Kết ĐH UCLand', 'customer_id' => 11, 'product_picture' => 'rsz_product11.jpg', 'product_description' => 'Thiết kế web trường học cần thể hiện tốt nhất các nhân tố sau:
•	Màu sắc tươi sáng, vui tươi, năng động và trẻ trung.
•	Hình ảnh đẹp, tươi sáng, hồn nhiên và mang tính giáo dục.
•	Nội dung website phải cô đọng, súc tích và giàu biểu cảm.
•	Giao diện web cần phải cân đối, bố trí hài hòa nhằm nêu bật được những điểm nhấn đồng thời cho khách truy cập có thể nhận biết nội dung tổng thể của website.
•	Thông tin được cập nhật nhanh bằng hệ thống tin tự động cập nhật từ các báo điện tử lớn chính thống.
•	Website phải được tìm kiếm ngay đầu tiên trên google.com.vn với những từ khóa chính của trang web cũng như những chủ đề quan trọng của web.
•	Cấu trúc link thân thiện giúp người đọc dễ dàng tìm đến những nội dung cần thiết và dễ dàng quay lại trang chủ nếu cần.
•	Hệ thống quản trị web thân thiện, dễ sử dụng, 100% ngôn ngữ thể hiện là tiếng Việt giúp người quản trị website nhàn nhã hơn khi cập nhật, chỉnh sửa bài viết, hình ảnh.
•	Tích hợp đầy đủ các tính năng cần thiết nhất mà một website giáo dục cần: Thông tin, dịch vụ, gallery, liên hệ,…
Chúng tôi đã xây dựng nhiều website chuyên nghiệp về giáo dục, đào tạo cho các trường học và tổ chức giáo dục một cách chuyên nghiệp và hiệu quả, được khách hàng đánh giá cao

Gioi thiệu các chức năng:
1	Quản lý thành viên	Module quản lý các thành viên hoạt động trên site. Mục đích chính của module này là giúp người quản trị có thể khởi tạo, phân quyền khu vực hoạt động của các member. Các quyền hạn được phân chia thành 2 mục
1.	Nơi Truy Cập: Thành viên có quyền xem các chuyên mục yêu cầu phải đăng nhập trên site không. Như phần văn phòng – Lưu trữ các thông báo, thông tin đến nhóm nhân viên thuộc văn phòng. Phần tra cứu học sinh – Chỉ những member nào được phân quyền hạn truy cập vào mục này mới có quyền tra cứu
2.	Chức năng hoạt động: Post bài – Member được phân quyền hạn này mới có quyền tham gia post bài lên trang.
Thành viên hoạt động trên trang đồng thời cũng là thành viên của diễn đàn, tuy nhiên đối với diễn đàn có thể đăng ký tìa khoản để tham gia. Đối với những tài khoản đăng ký thông qua diễn đàn sẽ không có tác dụng trên trang chủ. Chỉ những member được admin trực tiếp phân quyền trong quản trị mới được tham gia post bài và truy cập vào những mục có phân quyền trên trang chủ
2	Giới thiệu	Bài viết giới thiệu – Quản lý các bài viết giới thiệu về phòng giáo dục. Số lượng bài viết là tùy í, có thể chỉnh sửa dễ dàng trong panel quản trị
Gallery ảnh – Nơi đăng tải những hình ảnh về hoạt động hoặc mang tính chất giới thiệu về phòng GD&DT. Được thể hiện dưới dạng gallery, dễ dàng quản trị, mang tính thẩm mỹ cao.
3	Tin Tức	Quản lý các vấn đề về tin tức, bao gồm
1.	Phân cấp tin – Tạo, chỉnh sửa các nhóm tin
2.	Di chuyển bài viết, nhóm tin, sắp xếp thứ tự hiển thị tin trên trang – Các bài viết hay nhóm tin có thể di chuyển dễ dàng từ chuyên mục này sang chuyên mục khác. Ngoài ra, người quản trị còn có khả năng chỉnh sửa, cập nhật nội dung cho chúng, sắp xếp thứ tự hiển thị tin trên trang theo số thứ tự được gán cho mỗi tin, nhóm tin cụ thể.
3.	Bài viết – chỉnh sửa, khởi tạo, sắp xếp các bài viết vào từng chuyên mục cụ thể.
4	Tài Nguyên	Quản lý các tài nguyên được đăng tải trên trang
1.	Khởi tạo, chỉnh sửa thông tin mô tả
2.	Chuyển nội dung, gán sang member post khác nhau
3.	Khởi tạo, chỉnh sửa thông tin nhóm tài nguyên
4.	Tích hợp hệ thống tìm kiếm, lọc dữ liệu, thông tin về tài nguyên
5	Thông Tin Trường	Quản lý các thông tin về trường học trên địa bàn, là nơi chỉnh sửa, khởi tạo thông tin về các trường. Nội dung thông tin về trường hiển thị trên trang chủ sẽ được xử lý tại đây.
6	Liên Kết	Quản lý thông tin về các hình ảnh liên kết và link của chúng. Kích thước hình ảnh sẽ được thế kế theo chuẩn thế giới, hỗ trợ nhiều định dạng ảnh ( jpg, jpeg, png, gif, swf … ) giúp tiện lợi và tùy biến dễ dàng khi upload banner.
7	Video	Cập nhật video hiển trị trên trang chủ.
8	Quảng Cáo	Quản lý các hình ảnh quảng cáo trên trang. Kích thước các quảng cáo sẽ được thiết kế theo chuẩn thế giới, Trong mục này, người quản trị chỉ việc cập nhật hình ảnh quảng cáo lên trang. Đối với quảng cáo, hệ thống website được xây dựng sẽ hỗ trợ hầu hết phần lớn các chuẩn định dạng về hình ảnh ( jpg, jpeg, png, gif, swf … )
10	Liên Hệ	Quản lý các thông tin liên hệ được người truy cập gửi qua form liên hệ trên trang chủ. Mội thông tin gửi qua form này sẽ được hiển thị tại đây'],
            ['product_name' => 'Hệ Thống Quản Lý Khoa Hàng','customer_id' => 12, 'product_picture' => 'rsz_product12.jpg', 'product_description' => 'Thiết kế web trường học cần thể hiện tốt nhất các nhân tố sau:
•	Màu sắc tươi sáng, vui tươi, năng động và trẻ trung.
•	Hình ảnh đẹp, tươi sáng, hồn nhiên và mang tính giáo dục.
•	Nội dung website phải cô đọng, súc tích và giàu biểu cảm.
•	Giao diện web cần phải cân đối, bố trí hài hòa nhằm nêu bật được những điểm nhấn đồng thời cho khách truy cập có thể nhận biết nội dung tổng thể của website.
•	Thông tin được cập nhật nhanh bằng hệ thống tin tự động cập nhật từ các báo điện tử lớn chính thống.
•	Website phải được tìm kiếm ngay đầu tiên trên google.com.vn với những từ khóa chính của trang web cũng như những chủ đề quan trọng của web.
•	Cấu trúc link thân thiện giúp người đọc dễ dàng tìm đến những nội dung cần thiết và dễ dàng quay lại trang chủ nếu cần.
•	Hệ thống quản trị web thân thiện, dễ sử dụng, 100% ngôn ngữ thể hiện là tiếng Việt giúp người quản trị website nhàn nhã hơn khi cập nhật, chỉnh sửa bài viết, hình ảnh.
•	Tích hợp đầy đủ các tính năng cần thiết nhất mà một website giáo dục cần: Thông tin, dịch vụ, gallery, liên hệ,…
Chúng tôi đã xây dựng nhiều website chuyên nghiệp về giáo dục, đào tạo cho các trường học và tổ chức giáo dục một cách chuyên nghiệp và hiệu quả, được khách hàng đánh giá cao

Gioi thiệu các chức năng:
1	Quản lý thành viên	Module quản lý các thành viên hoạt động trên site. Mục đích chính của module này là giúp người quản trị có thể khởi tạo, phân quyền khu vực hoạt động của các member. Các quyền hạn được phân chia thành 2 mục
1.	Nơi Truy Cập: Thành viên có quyền xem các chuyên mục yêu cầu phải đăng nhập trên site không. Như phần văn phòng – Lưu trữ các thông báo, thông tin đến nhóm nhân viên thuộc văn phòng. Phần tra cứu học sinh – Chỉ những member nào được phân quyền hạn truy cập vào mục này mới có quyền tra cứu
2.	Chức năng hoạt động: Post bài – Member được phân quyền hạn này mới có quyền tham gia post bài lên trang.
Thành viên hoạt động trên trang đồng thời cũng là thành viên của diễn đàn, tuy nhiên đối với diễn đàn có thể đăng ký tìa khoản để tham gia. Đối với những tài khoản đăng ký thông qua diễn đàn sẽ không có tác dụng trên trang chủ. Chỉ những member được admin trực tiếp phân quyền trong quản trị mới được tham gia post bài và truy cập vào những mục có phân quyền trên trang chủ
2	Giới thiệu	Bài viết giới thiệu – Quản lý các bài viết giới thiệu về phòng giáo dục. Số lượng bài viết là tùy í, có thể chỉnh sửa dễ dàng trong panel quản trị
Gallery ảnh – Nơi đăng tải những hình ảnh về hoạt động hoặc mang tính chất giới thiệu về phòng GD&DT. Được thể hiện dưới dạng gallery, dễ dàng quản trị, mang tính thẩm mỹ cao.
3	Tin Tức	Quản lý các vấn đề về tin tức, bao gồm
1.	Phân cấp tin – Tạo, chỉnh sửa các nhóm tin
2.	Di chuyển bài viết, nhóm tin, sắp xếp thứ tự hiển thị tin trên trang – Các bài viết hay nhóm tin có thể di chuyển dễ dàng từ chuyên mục này sang chuyên mục khác. Ngoài ra, người quản trị còn có khả năng chỉnh sửa, cập nhật nội dung cho chúng, sắp xếp thứ tự hiển thị tin trên trang theo số thứ tự được gán cho mỗi tin, nhóm tin cụ thể.
3.	Bài viết – chỉnh sửa, khởi tạo, sắp xếp các bài viết vào từng chuyên mục cụ thể.
4	Tài Nguyên	Quản lý các tài nguyên được đăng tải trên trang
1.	Khởi tạo, chỉnh sửa thông tin mô tả
2.	Chuyển nội dung, gán sang member post khác nhau
3.	Khởi tạo, chỉnh sửa thông tin nhóm tài nguyên
4.	Tích hợp hệ thống tìm kiếm, lọc dữ liệu, thông tin về tài nguyên
5	Thông Tin Trường	Quản lý các thông tin về trường học trên địa bàn, là nơi chỉnh sửa, khởi tạo thông tin về các trường. Nội dung thông tin về trường hiển thị trên trang chủ sẽ được xử lý tại đây.
6	Liên Kết	Quản lý thông tin về các hình ảnh liên kết và link của chúng. Kích thước hình ảnh sẽ được thế kế theo chuẩn thế giới, hỗ trợ nhiều định dạng ảnh ( jpg, jpeg, png, gif, swf … ) giúp tiện lợi và tùy biến dễ dàng khi upload banner.
7	Video	Cập nhật video hiển trị trên trang chủ.
8	Quảng Cáo	Quản lý các hình ảnh quảng cáo trên trang. Kích thước các quảng cáo sẽ được thiết kế theo chuẩn thế giới, Trong mục này, người quản trị chỉ việc cập nhật hình ảnh quảng cáo lên trang. Đối với quảng cáo, hệ thống website được xây dựng sẽ hỗ trợ hầu hết phần lớn các chuẩn định dạng về hình ảnh ( jpg, jpeg, png, gif, swf … )
10	Liên Hệ	Quản lý các thông tin liên hệ được người truy cập gửi qua form liên hệ trên trang chủ. Mội thông tin gửi qua form này sẽ được hiển thị tại đây'],
        ]);
    }
}
