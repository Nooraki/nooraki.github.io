from http.server import BaseHTTPRequestHandler
import requests
import json
import os

class handler(BaseHTTPRequestHandler):
    def do_POST(self):
        TELEGRAM_TOKEN = os.getenv('TELEGRAM_TOKEN')
        CHAT_ID = os.getenv('TELEGRAM_CHAT_ID')
        
        content_length = int(self.headers['Content-Length'])
        post_data = self.rfile.read(content_length)
        data = json.loads(post_data)
        
        name = data.get('name', '')
        email = data.get('email', '')
        message = data.get('message', '')
        
        telegram_message = (
            "📬 پیام جدید از وبسایت:\n\n"
            f"👤 نام: {name}\n"
            f"📧 ایمیل: {email}\n"
            f"📝 پیام:\n{message}"
        )
        
        try:
            response = requests.post(
                f'https://api.telegram.org/bot{TELEGRAM_TOKEN}/sendMessage',
                json={
                    'chat_id': CHAT_ID,
                    'text': telegram_message,
                    'parse_mode': 'HTML'
                }
            )
            
            if response.status_code == 200:
                self.send_response(200)
                self.send_header('Content-type', 'application/json')
                self.end_headers()
                self.wfile.write(json.dumps({
                    'success': True,
                    'message': 'پیام ارسال شد'
                }).encode())
            else:
                raise Exception(f'خطای تلگرام: {response.json()["description"]}')
                
        except Exception as e:
            self.send_response(500)
            self.send_header('Content-type', 'application/json')
            self.end_headers()
            self.wfile.write(json.dumps({
                'success': False,
                'error': str(e)
            }).encode())