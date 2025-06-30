document.getElementById('contactForm').addEventListener('submit', async (e) => {
    e.preventDefault();
    
    const name = document.getElementById('name').value;
    const email = document.getElementById('email').value;
    const message = document.getElementById('message').value;
    
    const responseElement = document.getElementById('responseMessage');
    responseElement.textContent = 'در حال ارسال...';
    responseElement.style.color = '#3498db';
    
    try {
        const response = await fetch('/api/send-to-telegram', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({ name, email, message })
        });
        
        const result = await response.json();
        
        if (response.ok) {
            responseElement.textContent = 'پیام شما با موفقیت ارسال شد!';
            responseElement.style.color = '#27ae60';
            document.getElementById('contactForm').reset();
        } else {
            throw new Error(result.error || 'خطا در ارسال پیام');
        }
    } catch (error) {
        responseElement.textContent = `خطا: ${error.message}`;
        responseElement.style.color = '#e74c3c';
    }
});