<?php include './views/layout/header.php'; ?>

<div style="padding: 20px; background-color: #fff;">
    <h2 style="text-align: center; font-size: 24px; margin-bottom: 20px; color: #000;">Danh sách tin tức</h2>
    <ul style="list-style-type: none; padding: 0;">
        <?php for ($i = 0; $i < 4; $i++): ?>
        <li style="display: flex; align-items: center; margin-bottom: 15px;">
            <img src="./assets/images/1.jpg" alt="Ảnh thumbnail tin tức" style="height: 50px; width: 50px; margin-right: 15px; background-color: #ddd;">
            <button style="padding: 10px 15px; background-color: #007bff; color: #fff; border: none; cursor: pointer; border-radius: 5px; font-size: 14px;" 
                onclick="location.href='#'">
                Đọc Thêm
            </button>
        </li>
        <?php endfor; ?>
    </ul>
</div>

<?php include './views/layout/footer.php'; ?>
