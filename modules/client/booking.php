<?php
if (!defined('_TRGIAHUY')) {
    die('Truy cập không hợp lệ');
}
$data = ['title' => 'Đặt bàn'];
layout('header', $data);
?>

<?php echo layout('nav'); ?>

<!-- Phần booking -->
<div id="order">

    <section class="banner">
        <div class="about-title">
            <h1>Đặt bàn</h1>
        </div>
        <div class="card-container">
            <div class="card-img">
                <!-- image here -->
            </div>

            <div class="card-content">

                <form method="POST" action="connect.php" id="form">

                    <div class="form-row">

                        <input type="datetime-local" placeholder="Chọn ngày" name="chooseDate">

                        <select name="hours" required>
                            <option value="">Chọn giờ</option>
                            <option value="10">10:00</option>
                            <option value="12">12:00</option>
                            <option value="14">14:00</option>
                            <option value="16">16:00</option>
                            <option value="18">18:00</option>
                            <option value="20">20:00</option>

                        </select>
                    </div>

                    <div class="form-row">
                        <input type="text" placeholder="Họ và tên" name="name" required>
                        <input type="number" placeholder="Số điện thoại" name="phoneNumber" required>
                    </div>

                    <div class="form-row">
                        <input type="email" placeholder="Email" name="email">
                        <input type="number" placeholder="Số lượng người" min="1" name="people" required>

                    </div>

                    <div class="form-row">
                        <textarea id="" cols="300" rows="2" placeholder="Ghi chú (nếu có)" name="note"></textarea>
                    </div>

                    <div class="form-row">
                        <div class="submit-position">
                            <button type="submit" value="ĐẶT BÀN" id="submit"> ĐẶT BÀN</button>
                        </div>

                    </div>



                </form>

                <p id="output"></p>
                <script src="./assets/js/main.js"></script>
                <script src="./assets/js/submit.js"></script>
            </div>
        </div>
    </section>
</div>

<?php layout('footer');
