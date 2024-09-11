document.addEventListener('DOMContentLoaded', () => {
    const users = [
        { id: 1, name: 'Juan Pérez', email: 'juan@example.com', registrationDate: '2024-08-01' },
        { id: 2, name: 'María Gómez', email: 'maria@example.com', registrationDate: '2024-08-05' },
        { id: 3, name: 'Carlos López', email: 'carlos@example.com', registrationDate: '2024-08-10' }
    ];

    const userCardsContainer = document.querySelector('.user-cards-container');

    users.forEach(user => {
        const userCard = document.createElement('div');
        userCard.classList.add('user-card');
        userCard.innerHTML = `
            <h3>${user.name}</h3>
            <p>Email: ${user.email}</p>
            <p>Registrado: ${user.registrationDate}</p>
        `;
        userCardsContainer.appendChild(userCard);
    });
});
