import java.util.Date;

public class Card extends Payment
{
    Integer cardNumber;
    Date date;
    Integer cvv;

    public Card(Integer id, Integer cardNumber, Date date, Integer cvv)
    {
        super(id);
        this.cardNumber = cardNumber;
        this.date = date;
        this.cvv = cvv;
    }
}
