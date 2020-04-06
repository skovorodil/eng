package com.engSlang;

import org.junit.Assert;
import org.junit.Test;
import org.openqa.selenium.By;
import org.openqa.selenium.WebElement;
import org.openqa.selenium.support.ui.Select;

import java.util.List;

public class Testing extends WebDriverSettings {
    private static final String EMAIL = "zenit1032@gmail.com";
    @Test
    public void firstTest() {
        open();
        String title = driver.getTitle();
        Assert.assertTrue(title.equals("Family Language"));
    }

    @Test
    public void thirdTest() {
        open();
        driver.findElement(By.id("email")).sendKeys(EMAIL);
        driver.findElement(By.id("pas")).sendKeys("1234");
        driver.findElement(By.id("login")).click();
        String currentUrl = driver.getCurrentUrl();
        Assert.assertTrue(currentUrl.equals("https://eng-slang.000webhostapp.com/main.php"));
    }
    @Test
    public void fourthTest() {
        open();
        driver.findElement(By.id("reg")).click();
        driver.findElement(By.id("regEmail")).sendKeys("test"+Math.random()+"@gmail.com");
        driver.findElement(By.id("regName")).sendKeys("Вадим"+Math.random());
        driver.findElement(By.id("regPas")).sendKeys("12345");
        driver.findElement(By.id("regButton")).click();
        String currentUrl = driver.getCurrentUrl();
        Assert.assertTrue(currentUrl.equals("https://eng-slang.000webhostapp.com/welcome.php"));
    }

    @Test
    public void fifthTest() throws InterruptedException {
        open();
        enter("test1@mail.ru","1234");
        driver.findElement(By.id("nameMenu")).click();
        Thread.sleep(1000);

        driver.findElement(By.id("chName")).sendKeys("Димас");
        driver.findElement(By.id("chPhone")).sendKeys("987654321");
        driver.findElement(By.id("change")).click();
        driver.findElement(By.id("nameMenu")).click();
        driver.findElement(By.id("chName"));
        Thread.sleep(1000);

        WebElement a = driver.findElement(By.id("phoneID"));
        Assert.assertTrue(a.getText().equalsIgnoreCase("Телефон: 987654321"));
        Thread.sleep(1000);

        driver.findElement(By.id("chPhone")).sendKeys("123456789");
        driver.findElement(By.id("change")).click();
    }

    @Test
    public void checkEmail() throws InterruptedException {
        open();
        enter("test1@mail.ru","1234");
        driver.findElement(By.id("nameMenu")).click();
        Thread.sleep(1000);

        driver.findElement(By.id("chEmail")).sendKeys("test2@mail.ru");
        driver.findElement(By.id("change")).click();
        driver.findElement(By.id("exitMenu")).click();
        Thread.sleep(1000);

        enter("test2@mail.ru","1234");
        Thread.sleep(1000);
        String currentUrl = driver.getCurrentUrl();
        Assert.assertTrue(currentUrl.equals("https://eng-slang.000webhostapp.com/main.php"));

        driver.findElement(By.id("nameMenu")).click();
        driver.findElement(By.id("chEmail")).sendKeys("test1@mail.ru");
        driver.findElement(By.id("change")).click();
        driver.findElement(By.id("nameMenu")).click();
        Thread.sleep(1000);
    }

    @Test
    public void checkPass() throws InterruptedException {
        open();
        enter("test1@mail.ru","1234");
        driver.findElement(By.id("nameMenu")).click();
        Thread.sleep(1000);

        driver.findElement(By.id("oldPas")).sendKeys("1234");
        driver.findElement(By.id("newPas")).sendKeys("12345");
        driver.findElement(By.id("change")).click();
        driver.findElement(By.id("exitMenu")).click();
        Thread.sleep(1000);

        enter("test1@mail.ru","12345");
        Thread.sleep(1000);
        String currentUrl = driver.getCurrentUrl();
        Assert.assertTrue(currentUrl.equals("https://eng-slang.000webhostapp.com/main.php"));

        driver.findElement(By.id("nameMenu")).click();
        driver.findElement(By.id("oldPas")).sendKeys("12345");
        driver.findElement(By.id("newPas")).sendKeys("1234");
        driver.findElement(By.id("change")).click();
        driver.findElement(By.id("nameMenu")).click();
        Thread.sleep(1000);

    }

    @Test
    public void firstNegTest() {
        open();
        driver.findElement(By.id("email")).sendKeys(EMAIL);
        driver.findElement(By.id("pas")).sendKeys("");
        driver.findElement(By.id("login")).click();
        String currentUrl = driver.getCurrentUrl();
        Assert.assertTrue(currentUrl.equals("https://eng-slang.000webhostapp.com/main.php"));
    }
    @Test
    public void sixTest() {
        open();
        driver.findElement(By.id("reg")).click();
        driver.findElement(By.id("regEmail")).sendKeys(EMAIL+Math.random());
        driver.findElement(By.id("regName")).sendKeys("Вадим"+Math.random());
        driver.findElement(By.id("regPas")).sendKeys("");
        driver.findElement(By.id("regButton")).click();
        String currentUrl = driver.getCurrentUrl();
        Assert.assertTrue(currentUrl.equals("https://eng-slang.000webhostapp.com/welcome.php"));
    }

    @Test
    public void TestSlova() throws InterruptedException {
        String[] slova = new String [1000];
        String[] perevod = new String [1000];
        String[] trans = new String [1000];
        driver.get("https://reallanguage.club/anglijskie-slova-na-temu-odezhda/");
        int N = 1;
        WebElement table = driver.findElement(By.xpath("/html/body/div[1]/div[1]/section/div/div/table/tbody"));
        List<WebElement> allRows = table.findElements(By.tagName("tr"));
        for (WebElement row : allRows) {
            N++;
        }
        System.out.println(N);
          for (int i = 1; i < N; i++){
              WebElement slovo = driver.findElement(By.xpath("/html/body/div[1]/div[1]/section/div/div/table/tbody/tr["+i+"]/td[2]/p/strong/span/span"));
              slova[i] = slovo.getText();
              WebElement transs = driver.findElement(By.xpath("/html/body/div[1]/div[1]/section/div/div/table/tbody/tr["+i+"]/td[3]/p/span/span"));
              trans[i] = transs.getText();
              WebElement perevodd = driver.findElement(By.xpath("/html/body/div[1]/div[1]/section/div/div/table/tbody/tr["+i+"]/td[4]/p/span/span"));
              perevod[i] = perevodd.getText();
              System.out.println(slova[i]+" "+trans[i]+" "+perevod[i]);
          }
        System.out.println(slova[1]);
        open();
        driver.findElement(By.id("email")).sendKeys("admin@mail.ru");
        driver.findElement(By.id("pas")).sendKeys("admin");
        driver.findElement(By.id("login")).click();
        Thread.sleep(1000);
        for (int i = 4; i < N; i++){
            WebElement selectElem = driver.findElement(By.name("words"));
            Select select = new Select(selectElem);
            select.selectByVisibleText("Общество");
            driver.findElement(By.id("addWord")).sendKeys(slova[i]);
            driver.findElement(By.id("addTr")).sendKeys(trans[i]);
            driver.findElement(By.id("addTranslate")).sendKeys(perevod[i]);
            driver.findElement(By.id("add")).click();
            System.out.println("GOTOVO"+i);
        }
    }


    private void open() {
        driver.get("https://eng-slang.000webhostapp.com/");
    }

    private void enter(String email, String pass) {
        driver.findElement(By.id("email")).sendKeys(email);
        driver.findElement(By.id("pas")).sendKeys(pass);
        driver.findElement(By.id("login")).click();
    }
    //Thread.sleep(100000);
    //WebDriverWait  wait = new WebDriverWait(driver,10);
}

