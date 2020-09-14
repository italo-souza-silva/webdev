def mmc(number1, number2):
    numbers = []
    if number1 <= number2:
        for i in range(1,number2+1):
            if number1 % i == 0 and number2 % i == 0:
                numbers.append(i)
            return numbers
print(mmc(4,6))
    
