

<style>
body{
    background:linear-gradient(135deg,#0f001a,#1f0033,#2e0059);
    font-family: 'Poppins', sans-serif;
}

.thank-wrapper{
    display:flex;
    justify-content:center;
    align-items:center;
    height:80vh;
}

.thank-box{
    width:500px;
    text-align:center;
    background:rgba(255,255,255,0.05);
    backdrop-filter: blur(15px);
    padding:50px 30px;
    border-radius:20px;
    border:1px solid rgba(168,85,247,0.4);
    box-shadow:0 0 40px rgba(168,85,247,0.5);
    animation:fadeIn 0.8s ease-in-out;
    color:white;
}

.thank-box h1{
    font-size:28px;
    margin-bottom:15px;
    color:#c084fc;
}

.thank-box p{
    font-size:16px;
    margin:10px 0;
    opacity:0.9;
}

.order-id{
    font-size:18px;
    font-weight:bold;
    color:#a855f7;
}

.success-icon{
    font-size:60px;
    margin-bottom:20px;
    animation:pop 0.5s ease-in-out;
}

.btn-home{
    display:inline-block;
    margin-top:25px;
    padding:12px 25px;
    border-radius:30px;
    background:#a855f7;
    color:white;
    text-decoration:none;
    font-weight:bold;
    transition:0.3s;
}

.btn-home:hover{
    background:#9333ea;
    transform:scale(1.05);
    box-shadow:0 0 20px #a855f7;
}

@keyframes fadeIn{
    from{opacity:0; transform:translateY(20px);}
    to{opacity:1; transform:translateY(0);}
}

@keyframes pop{
    0%{transform:scale(0);}
    100%{transform:scale(1);}
}
</style>

<div class="thank-wrapper">
    <div class="thank-box">
        <div class="success-icon">🎉</div>
        <h1>Order Successful!</h1>
        <p>Your payment has been received successfully.</p>
        <p class="order-id">Order ID: #<?= htmlspecialchars($_GET['order']) ?></p>

        <a href="index.php" class="btn-home">Continue Shopping</a>
    </div>
</div>

