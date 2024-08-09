def generate_report():
    report = "report generated on:"+ __import__("datetime").datetime.now().strftime("%Y-%m-%H:%M:%S")
    return report

def save_report(report, filename="report.txt"):
    with open(filename, "w") as file:
        file.write(report)

if __name__ == "__main__":
    report = generate_report()
    save_report(report)
    print("Report saved as report.txt")