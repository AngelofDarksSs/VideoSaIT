<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tech Support</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header class="header-nav">
        <h1>Tech Support</h1>
        <nav>
            <a href="index.html">Acasă</a>
            <a href="tech-support.php">Tech Support</a>
        </nav>
    </header>
    
    <main>
        <div class="chat-container">
            <h2>Chat Suport</h2>
            <div class="chat-box" id="chat-box"></div>
            <input type="text" id="chat-input" placeholder="Scrie un mesaj...">
            <button onclick="sendMessage()">Trimite</button>
        </div>
    </main>
    
    <script>
        function sendMessage() {
            let input = document.getElementById("chat-input");
            let message = input.value.trim();
            if (message !== "") {
                let chatBox = document.getElementById("chat-box");
                let newMessage = document.createElement("p");
                newMessage.textContent = "Tu: " + message;
                chatBox.appendChild(newMessage);
                input.value = "";
                // Trimitere către backend pentru email
                fetch("sendMail.php", {
                    method: "POST",
                    headers: {"Content-Type": "application/x-www-form-urlencoded"},
                    body: "message=" + encodeURIComponent(message)
                });
            }
        }
    </script>
</body>
</html>
