# 🌱 Hành Trang Sĩ Tử

> **"Khơi nguồn bản sắc học thuật - Biến áp lực thành cảm hứng."**

![Banner](https://github.com/user-attachments/assets/44be88aa-7e32-4492-9ba7-58f1da9f45f5)

## 📖 Giới thiệu (Introduction)

**Hành Trang Sĩ Tử** là dự án xây dựng website thương mại điện tử chuyên cung cấp các sản phẩm học tập sáng tạo (Stationery, Planner, Study Tools) dành cho sinh viên và cộng đồng Studygram.

Dự án tập trung vào trải nghiệm người dùng tối giản, thẩm mỹ với phong cách **Earth Tone** (Màu be, Xanh Sage, Vàng nắng), giúp khơi gợi cảm hứng học tập.

## 📸 Hình ảnh Demo (Screenshots)

Dưới đây là giao diện thực tế của dự án:

| **Trang Chủ (Home)** | **Giỏ Hàng (Cart)** |
|:---:|:---:|
| <img src="https://github.com/user-attachments/assets/44be88aa-7e32-4492-9ba7-58f1da9f45f5" width="100%" alt="Trang chủ Hành Trang Sĩ Tử"> | <img src="https://github.com/user-attachments/assets/e9650722-ec4c-4983-b279-136cccbc24ff" width="100%" alt="Giao diện giỏ hàng"> |

| **Chi tiết sản phẩm (Product)** | **Giao diện Mobile (Responsive)** |
|:---:|:---:|
| <img src="https://github.com/user-attachments/assets/65e00b6f-595d-4be1-b2b0-a1ed7dad8eca" width="100%" alt="Chi tiết sản phẩm"> | <img src="https://github.com/user-attachments/assets/7f5ae074-3fe5-4cba-a84d-86613dc34756" width="100%" alt="Giao diện trên điện thoại"> |

## 🛠️ Công nghệ sử dụng (Tech Stack)

* **Core:** WordPress (CMS).
* **E-commerce:** WooCommerce.
* **Frontend:** Custom CSS (Tùy biến giao diện Earth Tone/Pastel).
* **Database:** MySQL.
* **Local Environment:** LocalWP / XAMPP.
* **Deployment:** Cloudflare Tunnel (Hybrid Connection).

## ✨ Tính năng nổi bật (Key Features)

* 🎨 **Giao diện Custom:** Hệ thống màu sắc "Earth Tone" dịu mắt, tối ưu cho sự tập trung.
* 🛒 **Trải nghiệm mua sắm:** Giỏ hàng AJAX mượt mà, cho phép khách (Guest) mua hàng không cần đăng nhập.
* 🔒 **Hybrid Connection:** Cấu hình `wp-config.php` thông minh chạy song song Localhost (HTTP) và Cloudflare Tunnel (HTTPS) mà không lỗi SSL.
* 📱 **Responsive:** Tương thích hoàn toàn trên Mobile và Desktop.
* 🚀 **Mô hình Zero-cost:** Tối ưu quy trình đặt hàng và vận hành kho.

## ⚙️ Cài đặt & Chạy thử (Installation)

Dự án này được phát triển trên môi trường Localhost. Để chạy thử:

1.  **Clone repository:**
    ```bash
    git clone [https://github.com/username/hanh-trang-si-tu.git](https://github.com/username/hanh-trang-si-tu.git)
    ```
2.  **Cài đặt Database:**
    * Import file `.sql` vào phpMyAdmin.
    * Cập nhật thông tin trong `wp-config.php`:
        ```php
        define( 'DB_NAME', 'local' );
        define( 'DB_USER', 'root' );
        define( 'DB_PASSWORD', '' ); // Hoặc 'root' tùy môi trường
        ```
3.  **Cấu hình URL:**
    * Đảm bảo `wp-config.php` đã có đoạn mã xử lý Dynamic URL (để chạy Cloudflare Tunnel).
4.  **Truy cập:**
    * Mở trình duyệt: `http://localhost:10004`

## 🎨 Bảng màu (Color Palette)

* **Primary (Xanh Sage):** `#7a8f7a`
* **Background (Beige):** `#f6f4f0`
* **Accent (Nâu nhạt):** `#bfa58a`
* **Text (Xám đậm):** `#3f3f3f`

## 🤝 Đóng góp (Contributing)

Mọi đóng góp đều được hoan nghênh. Vui lòng mở Pull Request hoặc tạo Issue để thảo luận.

## 📜 License & Credits

* **Source:** Trust me bro.
* **Warranty:** Code chạy được là do nhân phẩm. Nếu lỗi thì tại máy bạn, không phải tại tôi.
* **Support:** Đừng gọi tôi, tôi cũng không biết tại sao nó chạy được đâu.

---
*_Code with 😭 and ☕ by Lê Trí Nhàn_*
