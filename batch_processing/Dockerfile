#lightweight python image
FROM python:3.9-alpine

#copy the batch script into the container
COPY batch_job.py /app/batch_job.py

#set the working directory
WORKDIR /app

#run the  batch job when the container starts
CMD ["python", "batch_job.py"]