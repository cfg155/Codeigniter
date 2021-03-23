<style>
    .navbar {
        position: absolute;
        width: 100%;
        display: flex;
        justify-content: space-between;
        align-items: center;
        background-color: RGBA(0, 0, 0, .2);
        padding: 0 20px;
        box-sizing: border-box;
    }

    .navbar a {
        color: white;
        text-decoration: none;
    }

    .navbar--links {
        width: 10%;
        display: flex;
        justify-content: space-around;
    }
</style>

<div class="navbar">
    <div class="navbar--logo">
        <img src="assets/logo@2x.png">
    </div>
    <div class="navbar--links">
        <a href="<?= base_url('/') ?>">Home</a>
        <a href="<?= base_url('/solution') ?>">Solution</a>
    </div>
</div>