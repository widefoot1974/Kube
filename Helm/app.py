from flask import Flask, request
import socket

app = Flask(__name__)

@app.route("/")
def hello():
    hostname = socket.gethostname()
    server_ip = socket.gethostbyname(hostname)
    client_ip = request.remote_addr
    return f"""
    <html>
    <head><title>Hello from Flask</title></head>
    <body>
      <h2>Hello from Flask!</h2>
      <p>Hostname: {hostname}</p>
      <p>Server IP: {server_ip}</p>
      <p>Client IP: {client_ip}</p>
    </body>
    </html>
    """

if __name__ == '__main__':
    app.run(host='0.0.0.0', port=5000)

