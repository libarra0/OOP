from car import Car
from account import Account

if __name__ == "__main__":
    print("Hello World!")

    car = Car("AMS258", Account("Veronica Herrera", "VER453"))
    print(vars(car))
    print(vars(car.driver))