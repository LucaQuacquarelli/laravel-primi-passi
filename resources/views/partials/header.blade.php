<header>
        <div class="title">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/36/Logo.min.svg/1200px-Logo.min.svg.png" alt="logo">
        </div>
        <div class="links">
            <a href="home" class="btn">HOME</a>
            <a href="documentation" class="btn">DOCUMENTATION</a>
            <a href="news" class="btn">NEWS</a>
        </div>
</header>

<style>
    * {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
    }

    header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        height: 100px;
        padding: 20px;
        border-bottom: 5px solid #ff291a;
    }

    header img {
        width: 15%;
    }

    .links {
        display: flex;
    }
    .links a {
        margin:  0 10px;
    }

    .btn {
        padding: 15px 20px;
        background-color: #ff291a;
        color: white;
        border-radius: 10px;
        text-decoration: none;
    }

    .btn:hover {
        scale: 1.2;
    }
</style>