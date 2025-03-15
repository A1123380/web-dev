$userIP = $_SERVER['REMOTE_ADDR']; // 取得用戶的 IP 地址
$userAgent = $_SERVER['HTTP_USER_AGENT']; // 取得用戶的瀏覽器資訊
$referrer = $_SERVER['HTTP_REFERER'] ?? 'Direct Access'; // 取得訪客的來源網址
$serverName = $_SERVER['SERVER_NAME']; // 取得伺服器的網域名稱
$serverIP = $_SERVER['SERVER_ADDR']; // 取得伺服器的 IP
$port = $_SERVER['REMOTE_PORT']; // 取得用戶端連接埠
$protocol = $_SERVER['SERVER_PROTOCOL']; // 取得伺服器使用的協議 (HTTP/HTTPS)
$requestMethod = $_SERVER['REQUEST_METHOD']; // 取得請求方法 (GET, POST, etc.)
$requestUri = $_SERVER['REQUEST_URI']; // 取得用戶請求的完整 URL
$scriptName = $_SERVER['SCRIPT_NAME']; // 取得當前執行的 PHP 檔案名稱
$serverTime = date("Y-m-d H:i:s"); // 取得伺服器目前時間
$serverSoftware = $_SERVER['SERVER_SOFTWARE']; // 取得伺服器軟體資訊
$phpVersion = PHP_VERSION; // 取得伺服器的 PHP 版本
$isHttps = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'Yes' : 'No'; // 是否透過 HTTPS 連線
$acceptLanguage = $_SERVER['HTTP_ACCEPT_LANGUAGE'] ?? 'Unknown'; // 用戶偏好的語言
$acceptEncoding = $_SERVER['HTTP_ACCEPT_ENCODING'] ?? 'Unknown'; // 用戶可接受的編碼格式
$acceptType = $_SERVER['HTTP_ACCEPT'] ?? 'Unknown'; // 用戶可接受的檔案類型
$proxyVia = $_SERVER['HTTP_VIA'] ?? 'No Proxy'; // 用戶是否透過 Proxy 連線
$forwardedFor = $_SERVER['HTTP_X_FORWARDED_FOR'] ?? 'Direct Connection'; // 用戶真實 IP（若使用 Proxy）
echo "<h2>使用者填寫的資料</h2>";
echo "👤 您的姓名: " . htmlspecialchars($uName) . "（使用者輸入的名稱）<br>";
echo "🔑 您的密碼: " . htmlspecialchars($uPasswd) . "（使用者輸入的密碼，應加密儲存！）<br>";
echo "📧 您的電子郵件: " . htmlspecialchars($uMail) . "（使用者輸入的 Email）<br>";
echo "🎨 您喜歡的顏色: " . htmlspecialchars($uColor) . "（使用者選擇的顏色）<br>";
echo "🎂 您的年齡: " . htmlspecialchars($uAge) . " 歲（使用者輸入的年齡）<br>";
echo "📅 您的生日: " . htmlspecialchars($uBirth) . "（使用者輸入的生日日期）<br>";
echo "🔗 您的網站: " . htmlspecialchars($uUrl) . "（使用者輸入的個人網址）<br>";
echo "❤️ 您對網站的喜愛程度: " . htmlspecialchars($uLike) . "（使用者選擇的滿意度數值）<br>";
echo "🔒 您的秘密: " . htmlspecialchars($uSecret) . "（應妥善加密處理！）<br>";

echo "<h2>伺服器與用戶端資訊</h2>";
echo "📍 您的 IP 地址: " . htmlspecialchars($userIP) . "（用戶的網際網路地址）<br>";
echo "🖥️ 您的瀏覽器資訊: " . htmlspecialchars($userAgent) . "（用戶使用的瀏覽器和裝置資訊）<br>";
echo "🚪 來源網址 (Referrer): " . htmlspecialchars($referrer) . "（用戶從哪個頁面來的）<br>";
echo "🌍 伺服器網域名稱: " . htmlspecialchars($serverName) . "（此網站的網域名稱）<br>";
echo "🔌 伺服器 IP: " . htmlspecialchars($serverIP) . "（主機的 IP 地址）<br>";
echo "🔢 用戶連接埠: " . htmlspecialchars($port) . "（用戶端使用的連接埠號碼）<br>";
echo "📡 伺服器協議: " . htmlspecialchars($protocol) . "（HTTP/HTTPS）<br>";
echo "📥 請求方法: " . htmlspecialchars($requestMethod) . "（使用者提交資料的方式，例如 POST 或 GET）<br>";
echo "📄 目前請求的 URL: " . htmlspecialchars($requestUri) . "（完整的請求網址）<br>";
echo "📂 目前執行的 PHP 檔案: " . htmlspecialchars($scriptName) . "（目前執行的 PHP 腳本）<br>";
echo "⏰ 伺服器時間: " . htmlspecialchars($serverTime) . "（伺服器目前的時間）<br>";
echo "🛠️ 伺服器軟體: " . htmlspecialchars($serverSoftware) . "（伺服器運行的軟體資訊）<br>";
echo "🐘 PHP 版本: " . htmlspecialchars($phpVersion) . "（當前 PHP 版本）<br>";
echo "🔒 是否使用 HTTPS: " . htmlspecialchars($isHttps) . "（網站是否使用安全連線）<br>";
echo "🗣️ 使用者語言: " . htmlspecialchars($acceptLanguage) . "（用戶瀏覽器的語言設定）<br>";
echo "📦 可接受的編碼: " . htmlspecialchars($acceptEncoding) . "（用戶瀏覽器可接受的壓縮格式）<br>";
echo "📜 可接受的檔案類型: " . htmlspecialchars($acceptType) . "（用戶瀏覽器可接受的檔案格式）<br>";
echo "🛰️ Proxy 伺服器: " . htmlspecialchars($proxyVia) . "（用戶是否透過 Proxy 連線）<br>";
echo "📡 真實 IP（若經 Proxy）: " . htmlspecialchars($forwardedFor) . "（如果用戶使用了 Proxy，這是原始 IP）<br>";