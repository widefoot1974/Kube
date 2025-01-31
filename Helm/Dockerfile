# Dockerfile 예시: python:3.9-alpine 기반
FROM python:3.9-alpine

# 작업 디렉토리 지정
WORKDIR /app

# Flask 설치
RUN pip install --no-cache-dir flask

# Flask 애플리케이션 복사 (app.py)
COPY app.py /app/

# 컨테이너 실행 시 Flask 앱 구동
CMD ["python", "/app/app.py"]

