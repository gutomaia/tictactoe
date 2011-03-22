while true;
do 
rm /tmp/behat_tmp
behat --format progress src/test/features -o /tmp/behat_tmp
clear
cat /tmp/behat_tmp
sleep 2;
done
