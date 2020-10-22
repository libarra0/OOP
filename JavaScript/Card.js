class Card extends Payment
{
    constructor(id, cardNumber, date, cvv)
    {
        super(id);
        this.cardNumber = cardNumber;
        this.date = date;
        this.cvv = cvv;
    }
}