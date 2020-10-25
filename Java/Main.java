class Main
{
    public static void main(String[] args)
    {
        System.out.println("Hello World!");
        
        UberX uberX = new UberX("AMQ123", new Account("Andres Herrera", "AND123"), "Toyota", "Corolla");
        uberX.setPassenger(4);
        uberX.printDataCar();

        UberVan uberVan = new UberVan("SXE123", new Account("Andrea Herrera", "ANDA523"));
        uberVan.setPassenger(6);
        uberVan.printDataCar();

        // Car car2 = new Car("QWE456", new Account("Andrea Herrera", "ANDA456"));
        // car2.passenger = 3;
        // car2.printDataCar();
    }
}