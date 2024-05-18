// API URL ve seçenekler
const url = 'https://chessplayersapi.p.rapidapi.com/players/findAll?limit=100';
const options = {
    method: 'GET',
    headers: {
        'X-RapidAPI-Key': 'e0ed7275ccmshefd802fa1bd2b04p1ab9e1jsn27fb86b2ae7e',
        'X-RapidAPI-Host': 'chessplayersapi.p.rapidapi.com'
    }
};

// oyuncu seçme fonksiyonu
function oyuncuseçme() {
    // API'ye GET isteği gönderme
    fetch(url, options)
        .then(response => {
            // İstek başarılıysa devam etme
            if (!response.ok) {
                throw new Error(`HTTP error! status: ${response.status}`);
            }
            // JSON verisini alma
            return response.json();
        })
        .then(data => {
            const playersDiv = document.getElementById('chess-players');
            if (data && Array.isArray(data)) {
                // İlk 5 oyuncuyu alma
                const top5Players = data.slice(0, 5);
                // Her bir oyuncu için HTML oluşturma
                top5Players.forEach(player => {
                    const playerDiv = document.createElement('div');
                    playerDiv.className = 'player';
                    playerDiv.innerHTML = `
                        <h2>${player.Ranking}: ${player.Player}</h2>
                        <p>Ünvan: ${player.Title}</p>
                        <p>Rating: ${player.Rating}</p>
                        <p>Federasyon: ${player.Federation}</p>
                    `;
                    // Oyuncu div'ini ekleme
                    playersDiv.appendChild(playerDiv);
                });
            }
        })
}
// fetchPlayers fonksiyonunu çağırma
oyuncuseçme();
