from car import Car

if __name__ == "__main__":
    print("Hello World!")

    car = Car()
    car.license = "AMS258"
    car.driver = "Andres Herrera"
    print(vars(car))

    car2 = Car()
    car2.license = "AMS258"
    car2.driver = "Veronica Herrera"
    print(vars(car2))