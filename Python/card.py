from payment import Payment

class Card(Payment):
    cardNumber = int
    date = str
    cvv = int

    def __init__(self, id, cardNumber, date, cvv):
        super.__init__(id)
        self.cardNumber = cardNumber
        self.date = date
        self.cvv = cvv